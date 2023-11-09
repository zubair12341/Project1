<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookDetails;
use App\Models\BookQuiz;
use App\Models\BookContent;
use App\Models\BookGenre;
use App\Models\BookVideos;
use App\Models\Announcement;
use App\Models\MyList;
use App\Models\Note;
use App\Models\User;
use App\Models\Review;
use App\Models\Comment;
use App\Models\QuizResult;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Auth;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.home');
    }

    public function dashboard()
    {
        return view('student.dashboard');
    }

    public function profile()
    {
        return view('student.profile');
    }

    public function mybooks()
    {
        $mylist = MyList::where('user_id', Auth::user()->id)->pluck('book_id');
        $mybooks = Book::whereIn('id',$mylist)
        ->with('details','quiz','vocabularyPdfs','content','videos','genres')
        ->get();

        return view('student.mybooks', compact('mybooks'));
    }

    public function orderhistory()
    {
        return view('student.orderhostory');
    }

    public function student_announcement()
    {
        $ann = Announcement::all();
        return view('student.announcement', compact('ann'));
    }

    public function student_subscription()
    {
        return view('student.subscription');
    }

    public function student_settings()
    {
        return view('student.settings');
    }

    public function student_book()
    {
        return view('student.book');
    }

    public function student_book_lesson()
    {
        return view('student.bookcontent');
    }

    public function selected_book($book,$id){

        $review_count = Review::where('book_id', $id)->count();
        $review = Review::where('book_id', $id)->with('user')->get();
        // dd($review);

        $check = MyList::where('book_id', $id)
                ->where('user_id', Auth::user()->id)->first();
        // if($check != null)
        // {
        //     return redirect()->route('student.books')->with('success','Book Already in your List');
        // }
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

        return view('student.choosedbook', compact('review','review_count','bookk','title','relatedBooks','total_book','check'));
    }

    public function content_show($book,$id)
    {
        $title = $book;
        $bookk = Book::where('id','=',$id)
        ->with('details','quiz','vocabularyPdfs','content','videos','genres')
        ->get();
        $quiz_title = BookQuiz::where('book_id', $id)->pluck('quiz_name')->first();
        $total_q = BookQuiz::where('book_id', $id)->count();
        $quiz_result =  QuizResult::where('book_id',$id)
                        ->where('user_id', Auth::user()->id)
                        ->get();

        return view('student.showcontent', compact('title','bookk','quiz_title','total_q','quiz_result'));
    }

    public function fetch_res($bookid){

        $notes = QuizResult::where('book_id', $bookid)
                ->where('user_id',Auth::user()->id)
                ->get();

        return response()->json(['success' => true, 'resss' => $notes]);
    }

    public function book_list($id)
    {
        $user = Auth::user()->id;
        $add =  new MyList();
        $add->book_id = $id;
        $add->user_id =$user;
        $add->save();

        if($add){
            return redirect()->route('student.books')->with('success', 'Book Added to Your List');
        }else{
            return redirect()->back()->with('error', 'Please Try again Latter!');
        }
    }

    public function saveNote(Request $request)
    {
        $validatedData = $request->validate([
            'book_id' => 'required',
            'noteContent' => 'required|string',
        ]);

        // Create a new note
        $note = new Note();
        $note->book_id = $validatedData['book_id'];
        $note->user_id = Auth::user()->id;
        $note->content = $validatedData['noteContent'];
        $note->save();

        return response()->json(['success' => true]);
    }

    public function getNotes($bookid)
    {
        // Retrieve notes for the specified lesson
        $notes = Note::where('book_id', $bookid)
                ->where('user_id',Auth::user()->id)
                ->get();

        return response()->json(['success' => true, 'notes' => $notes]);
    }

    public function submit_quiz(Request $request)
    {
        $book_id = $request->input('b_id'); // Get the book_id from the request

        // Fetch correct answers for the given book_id
        $correctAnswers = BookQuiz::where('book_id', $book_id)->pluck('correct_option', 'id')->toArray();

        // Extract submitted values from the request
        $submittedValues = [];
        foreach ($request->all() as $field => $selectedValue) {
            // Check if the field name starts with 'rbt-radio-' (indicating a selected answer)
            if (strpos($field, 'rbt-radio-') === 0) {
                // Extract the question ID from the field name
                $questionId = substr($field, strlen('rbt-radio-'));
                $submittedValue = trim($selectedValue, '"');
                $submittedValues[$questionId] = $submittedValue;
            }
        }

        $score = 0;
        foreach ($submittedValues as $questionId => $submittedValue) {
            if (isset($correctAnswers[$questionId]) && $submittedValue === $correctAnswers[$questionId]) {
                // The selected value matches the correct answer
                $score++;
            }
            // else {
            //     // Debugging: Handle the case where the question ID doesn't exist in correctAnswers
            //     echo "Question $questionId - Submitted: $submittedValue, Correct: Not found in correctAnswers<br>";
            // }
        }

        // Return the calculated score
        $total_number = BookQuiz::where('book_id', $book_id)->count();
        $passing_percentage = 60;
        $percentage = ($score / $total_number) * 100;

        $res = new QuizResult();
        $res->book_id = $book_id;
        $res->user_id = Auth::user()->id;
        $res->result = $score;
        if ($percentage >= $passing_percentage) {
            $res->status = 'Pass';
        } else {
            $res->status = 'Fail';
        }
        $res->save();

        if($res){
            return response()->json(['score' => 'submited']);
        }

    }

    public function student_refereal()
    {
        $referral_code = User::where('id',Auth::user()->id)->first();
        $code = $referral_code->referal_code;
        $reffere_list = User::where('referal_user_id', Auth::user()->id)->get();
        // dd($reffere_list);
        return view('student.referral', compact('code','reffere_list'));
    }

    public function store_review(Request $request)
    {
        // Validate and store the comment
        // Remember to associate the comment with the correct book
        $validatedData = $request->validate([
            'comment' => 'required',
            'rating' => 'required',
        ]);

        $comment = new Review;
        $comment->book_id = $request->input('bookid'); // Associate with the correct book
        $comment->user_id = auth()->user()->id; // Assuming you have user authentication
        $comment->comment = $validatedData['comment'];
        $comment->rating = $validatedData['rating'];
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully');
    }

}
