<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function redirectTo()
    {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('student.home');
        }
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(Request $request)
    {
        // Store the return URL in the session, if it exists in the query string
        $request->session()->put('return_url', $request->input('return_url'));

        return view('auth.login');
    }


    protected function authenticated(Request $request, $user)
    {
        if ($request->session()->has('return_url')) {
            // Debugging: Print the URL being redirected to
            $redirectUrl = $request->session()->pull('return_url');
            // Redirect to the stored return URL
            return redirect($redirectUrl);
        }

        return $this->redirectTo();
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (!filter_var($credentials['email'], FILTER_VALIDATE_EMAIL) && !is_numeric($credentials['email'])) {
            throw ValidationException::withMessages(['email' => 'Invalid email or phone number.']);
        }
    }

    protected function attemptLogin(Request $request)
    {
        // Determine if the input is an email or phone number
        $fieldType = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'whatsapp';

        return Auth::attempt(
            [$fieldType => $request->input('email'), 'password' => $request->input('password')],
            $request->filled('remember')
        );
    }

}
