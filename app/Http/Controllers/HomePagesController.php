<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookDetails;
use App\Models\BookQuiz;
use App\Models\BookContent;
use App\Models\BookGenre;
use App\Models\BookVideos;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\JsonResponse;

class HomePagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('mainpages.about');
    }

    public function books()
    {
        $allbooks = Book::with('details')->get();
        $allbooks_count = Book::all()->count();
        $latestbooks_count = Book::orderBy("id", "DESC")->take(20)->count();
        $latestbooks = Book::orderBy("id", "DESC")->with('details')->take(20)->get();
        // dd($latestbooks);
        return view('mainpages.books', compact('allbooks','allbooks_count', 'latestbooks', 'latestbooks_count'));
    }

    public function selected_book($book,$id)
    {
        if(auth()->user()){
        if(Auth::user()->role != 'admin'){
            return redirect()->route('student.show.content', ['book'=> $book, 'id'=>$id]);
        }
    }
        $title = $book;
        $bookk = Book::where('id','=',$id)
        ->with('details','quiz','vocabularyPdfs','content','videos','genres')
        ->get();

        $author = $bookk->pluck('author');
        $total_book = Book::where('author', $author)->count();

        // related books according to same genre
        $books = Book::find($id);

        if ($books) {
            $genreIds = $books->genres->pluck('genre');
            $relatedBooksId = BookGenre::whereIn('genre', $genreIds)
            ->where('book_id', '!=', $id)
            ->pluck('book_id');

            $relatedBooks = Book::whereIn('id',$relatedBooksId)
            ->with('details','quiz','vocabularyPdfs','content','videos','genres')
            ->paginate(3);
        }
        return view('mainpages.choosedbook', compact('bookk','title','relatedBooks','total_book'));
    }

    public function content_show($book,$id)
    {
        if(auth()->user()){
            if(Auth::user()->role != 'admin'){
                return redirect()->route('student.book.select', ['book'=> $book, 'id'=>$id]);
            }
        }
        $title = $book;
        $bookk = Book::where('id','=',$id)
        ->with('details','quiz','vocabularyPdfs','content','videos','genres')
        ->get();
        $quiz_title = BookQuiz::where('book_id', $id)->pluck('quiz_name')->first();


        return view('mainpages.showcontent', compact('title','bookk','quiz_title'));
    }

    public function onlinecourse()
    {
        $course = Course::all();
        // dd($course);
        return view('mainpages.onlinecourse', compact('course'));
    }

    public function contactus()
    {
        return view('mainpages.contactus');
    }

    public function chose_genre($genre)
    {
        $title = $genre;
        $selectedGenre = $genre;
        $books = Book::with('details')
        ->whereHas('genres', function ($query) use ($selectedGenre) {
            $query->where('genre', $selectedGenre);
        })->get();

        return view('mainpages.chosgenre', compact('books','title'));
    }

    public function search(Request $request){

        $query = $request->input('query');

        $books = Book::where('title', 'like', "%$query%")
            ->orWhere('author', 'like', "%$query%")
            ->get();

        return response()->json($books);
    }

    public function validateReferralCode(Request $request){
        // return response()->json(['data' => $request->referral_code]);
        try {
            $referralCode = $request->referral_code;
            // Check if the referral code exists in the database
            $valid = User::where('referal_code', $referralCode)->exists();
            // Return a JSON response with the validation result
            return response()->json(['valid' => $valid]);
        } catch (\Exception $e) {
            Log::error('Error in validateReferralCode: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while validating the referral code.']);
        }
    }

}
