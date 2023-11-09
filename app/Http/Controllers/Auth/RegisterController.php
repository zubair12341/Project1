<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function redirectTo()
    {
        if (Auth::user()->role == 'student') {
            return redirect()->route('student.home');
        } elseif (Auth::user()->role == 'admin') {
            return redirect()->route('admin.home');
        } else {
            return $this->redirectTo;
        }
    }


    public function showRegistrationForm(Request $request)
    {
        if ($request->has('return_url')) {
            $request->session()->put('return_url', $request->input('return_url'));
        }

        return view('auth.register');
    }

    protected function registered(Request $request, $user)
    {
        if ($request->session()->has('return_url')) {
            return redirect($request->session()->pull('return_url'));
        } else {
            return $this->redirectTo();
        }
    }

    protected function authenticated(Request $request, $user)
    {
        if ($request->session()->has('return_url')) {
            // Redirect to the stored return URL
            return redirect($request->session()->pull('return_url'));
        } else {
            return $this->redirectTo();
        }
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'date_of_birth' => ['required', 'date'],
            'gender' => ['required', 'in:male,female,other'],
            'whatsapp' => ['required', 'string', 'max:13'],
            'book_genre' => ['required', 'array'],
            'book_genre.*' => ['in:fiction,non-fiction,fantasy,romance'], // Add other valid genres if needed
            'profile_image' => ['nullable', 'image', 'max:2048'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $profileImage = null;
        $referal_user_id = null;

        if (isset($data['profile_image'])) {
            $uploadedImage = $data['profile_image'];

            if ($uploadedImage instanceof UploadedFile && $uploadedImage->isValid()) {
                $profileImage = Str::uuid()->toString() . '.' . $uploadedImage->getClientOriginalExtension();
                $uploadedImage->storeAs('public/profile-images', $profileImage);
            }
        }

        if($data['referal_code'] != null){

            $referralUser = User::where('referal_code', $data['referal_code'])->first();
            if ($referralUser) {
                $referal_user_id = $referralUser->id;
            }
        }

        $user = new User([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'date_of_birth' => $data['date_of_birth'],
            'gender' => $data['gender'],
            'whatsapp' => $data['whatsapp'],
            'book_genre' => implode(',', $data['book_genre']),
            'role' => 'student',
        ]);

        if (!is_null($profileImage)) {
            $user->profile_image = $profileImage;
        }

        if (!is_null($referal_user_id)) {
            $user->referal_user_id = $referal_user_id;
        }

        $user->save();

        // Generate a referral code using the user's ID
        $referralCode = $user->id . 'Ref' . mt_rand(100, 999);

        // Update the user's record with the generated referral code
        $user->referal_code = $referralCode;
        $user->save();

        return $user;
    }

}
