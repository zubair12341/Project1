<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\BookDetails;
use App\Models\BookQuiz;
use App\Models\VocabularyPdf;
use App\Models\User;
use App\Models\BookContent;
use App\Models\BookGenre;
use App\Models\BookVideos;
use App\Models\Course;
use App\Models\Announcement;
use App\Models\Genre;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function dashboard()
    {
        $books = Book::all()->take(5);
        $book_count = Book::all()->count();
        $user_count = User::where('role','student')->count();
        $course_count = Course::all()->count();


        return view('admin.dashboard', compact('books','book_count','user_count','course_count'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function books()
    {
        $genre = Genre::all();
        $books = Book::with('details')->get();
        return view('admin.books', compact('books', 'genre'));
    }

    public function select_genre(Request $request)
    {
        $selectedGenre = $request->input('genre');
        $genre = Genre::all();
        // Query books based on the selected genre
        if ($selectedGenre === 'All') {
            // Fetch all books
            $books = Book::with('details')->get();
        } else {
            // Fetch books with the selected genre
            $books = Book::with('details')
                ->whereHas('genres', function ($query) use ($selectedGenre) {
                    $query->where('genre', $selectedGenre);
                })
                ->get();
        }

        return view('admin.books', compact('books','genre'));
    }

    public function createbook()
    {
        $genre = Genre::all();
        return view('admin.createbook', compact('genre'));
    }

    public function orderhistory()
    {
        return view('admin.orderhostory');
    }

    public function admin_announcement()
    {
        $ann = Announcement::all();
        return view('admin.announcement', compact('ann'));
    }

    public function create_announc(Request $request)
    {
        $announce = new Announcement();
        $announce->title = $request->title;
        $announce->description = $request->description;
        $announce->save();

        if($announce){
            return redirect()
            ->back()
            ->with('success','Announcement Created!');
        }else
        {
            return redirect()
            ->back()
            ->with('error', 'Something went wrong, try again!');
        }
    }

    public function delete_announcement(Announcement $announcement)
    {
        try {
            // Delete the announcement
            $announcement->delete();
            return redirect()
                ->back()
                ->with('success', 'Announcement deleted Successfully.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Unable to delete the Announcement.');
        }
    }

    public function update_announcement(Request $request){

        $announcement = Announcement::find($request->announcement_id);

        if(!$announcement)
        {
            return redirect()->back()->with('error','Not enable to edit');
        }

        $announcement->title = $request->input('title');
        $announcement->description = $request->input('description');
        $announcement->save();

        return redirect()->back()->with('success', 'Announcement updated!');
    }

    public function admin_subscription()
    {
        return view('admin.subscription');
    }

    public function admin_settings()
    {
        return view('admin.settings');
    }

    public function createcourse()
    {
        return view('admin.createcourse');
    }

    public function course()
    {
        $active = Course::where('status', 'active')->get();
        $block = Course::where('status', 'block')->get();
        return view('admin.courses', compact('active','block'));
    }

    public function storebook(Request $request)
    {

        // dd($request->videos);
        try {
            DB::beginTransaction();
            // $validatedData = $request->validate([
            //     'title' => 'required',
            //     'author' => 'required',
            //     'book_protagonist' => 'required',
            //     'book_version' => 'required',
            //     'publisher_date' => 'required',
            //     'book_total_pages' => 'required',
            //     'book_summary' => 'required',
            //     'free_notes' => 'required',
            //     'quiz_name' => 'required',
            //     'quiz_q' => 'required',
            //     'quiz_op1' => 'required',
            //     'quiz_op2' => 'required',
            //     'quiz_op3' => 'required',
            //     'quiz_op4' => 'required',
            //     'coorect_answer' => 'required',
            //     'document_name' => 'required',
            //     'document_file' => 'required',
            //     'book_intro_video' => 'required',
            //     'book_cover_image' => 'required',
            //     'video' => 'required',
            //     'video_title' => 'required',
            //     'vocab_file' => 'required',
            //     'vocab_name' => 'required',
            // ]);
            // Book Table


            $book = new Book([
                'title' => $request->get('title'),
                'author' => $request->get('author'),
                'book_protagonist' => $request->get('book_protagonist'),
                'book_version' => $request->get('book_version'),
                'publisher_date' => $request->get('book_publisher_date'),
                'book_total_pages' => $request->get('book_total_pages'),
                'book_summary' => $request->get('aboutCourse'),
                'free_notes' => $request->get('aboutNotes'),
            ]);
            $book->save();

            // Book Quiz
            $correct = $request->get('coorect_answer');
            $tt = new BookQuiz();
            $tt->book_id = $book->id;
            $tt->quiz_name = $request->get('quiz_name');
            $tt->question = $request->get('quiz_q');
            $tt->option_1 = $request->get('quiz_op1');
            $tt->option_2 = $request->get('quiz_op2');
            $tt->option_3 = $request->get('quiz_op3');
            $tt->option_4 = $request->get('quiz_op4');

            if($correct == 1){
                $tt->correct_option = $request->get('quiz_op1');
            }elseif($correct == 2)
            {
                $tt->correct_option = $request->get('quiz_op2');
            }
            elseif($correct == 3)
            {
                $tt->correct_option = $request->get('quiz_op3');
            }
            elseif($correct == 4)
            {
                $tt->correct_option = $request->get('quiz_op4');
            }

            $tt->save();

            // inserting an array of quiz questions
            if ($request->has('quiz_qq') && is_array($request->quiz_qq)) {
                foreach ($request->quiz_qq as $index => $req) {
                    if (isset($request->quiz_qq[$index]) && isset($request->quiz_opp1[$index]) && isset($request->quiz_opp2[$index]) && isset($request->quiz_opp3[$index]) && isset($request->quiz_opp4[$index]) && isset($request->correct_answerq[$index])) {
                        $quizt = new BookQuiz();
                        $quizt->book_id = $book->id;
                        $quizt->quiz_name = $request->get('quiz_name');
                        $quizt->question = $request->quiz_qq[$index];
                        $quizt->option_1 = $request->quiz_opp1[$index];
                        $quizt->option_2 = $request->quiz_opp2[$index];
                        $quizt->option_3 = $request->quiz_opp3[$index];
                        $quizt->option_4 = $request->quiz_opp4[$index];

                        $correctOptionIndex = $request->correct_answerq[$index];

                        switch ($correctOptionIndex) {
                            case 1:
                                $quizt->correct_option = $request->quiz_opp1[$index];
                                break;
                            case 2:
                                $quizt->correct_option = $request->quiz_opp2[$index];
                                break;
                            case 3:
                                $quizt->correct_option = $request->quiz_opp3[$index];
                                break;
                            case 4:
                                $quizt->correct_option = $request->quiz_opp4[$index];
                                break;
                            default:
                                $quizt->correct_option = 'N/A'; // Handle any default or error case
                        }

                        $quizt->save();
                    }
                }
            }

            $singtmp = TemporaryFile::where('folder', $request->document_file)->first();
            // dd($singtmp);
            if ($singtmp) {
                Storage::disk()->copy('posts/tmp/'.$singtmp->folder .'/'. $singtmp->file, 'pdfs/' . $singtmp->folder .'/'. $singtmp->file);
                $bookDocument = new BookContent();
                $bookDocument->book_id = $book->id;
                $bookDocument->document_name = $request->get('document_name');
                $bookDocument->document_file = 'pdfs/' . $singtmp->folder .'/'. $singtmp->file;
                Storage::deleteDirectory('posts/tmp/' . $singtmp->folder);
                $singtmp->delete();
                $bookDocument->save();
            }


            if ($request->has('document_files')){
            $folder2 = $request->document_files;
                $j=1;
                $doctmps = TemporaryFile::whereIn('folder', $folder2)->get();
                    foreach($doctmps as $doctmp) {
                        Storage::disk()->copy('posts/tmp/' . $doctmp->folder . '/' . $doctmp->file, 'pdfs/' . $doctmp->folder . '/' . $doctmp->file);
                        $bookNotesA = new BookContent();
                        $bookNotesA->book_id = $book->id;
                        $bookNotesA->document_name = "Book Document : ".$j++;
                        $bookNotesA->document_file = 'pdfs/' . $doctmp->folder . '/' . $doctmp->file;
                        $bookNotesA->save();

                        Storage::deleteDirectory('posts/tmp/'. $doctmp->folder);
                        // $doctmps->delete();
                    }
                }

            // Book Genre
            if ($request->has('book_genre') && is_array($request->book_genre)) {
                foreach ($request->book_genre as $genre) {
                    $bookGenre = new BookGenre();
                    $bookGenre->book_id = $book->id;
                    $bookGenre->genre = $genre;
                    $bookGenre->save();
                }
            }

            $bookDetails = new BookDetails();
            $bookDetails->book_id = $book->id;

            $vidtmp = TemporaryFile::where('folder', $request->book_intro_video)->first();
            if ($vidtmp) {
                Storage::disk()->copy('posts/tmp/'.$vidtmp->folder .'/'. $vidtmp->file, 'videos/' . $vidtmp->folder .'/'. $vidtmp->file);
                $bookDetails->intro_video = 'videos/' . $vidtmp->folder .'/'. $vidtmp->file;
                Storage::deleteDirectory('posts/tmp/' . $vidtmp->folder);
                $vidtmp->delete();
            }

            $tmpfile = TemporaryFile::where('folder', $request->book_cover_image)->first();
            if($tmpfile){

                Storage::disk()->copy('posts/tmp/' . $tmpfile->folder . '/' . $tmpfile->file, 'cover_img/' . $tmpfile->folder . '/' . $tmpfile->file);
                $bookDetails->cover_image = 'cover_img/' . $tmpfile->folder . '/' . $tmpfile->file; // inserting data
                Storage::deleteDirectory('posts/tmp/' . $tmpfile->folder);
                $tmpfile->delete();
            }
            $bookDetails->save();


            $vidtmp = TemporaryFile::where('folder', $request->video)->first();
            if($vidtmp){
                Storage::disk()->copy('posts/tmp/'. $vidtmp->folder.'/'.$vidtmp->file, 'videos/'.$vidtmp->folder.'/'.$vidtmp->file);
                $bookVideo = new BookVideos();
                $bookVideo->book_id = $book->id;
                $bookVideo->video_title = $request->video_title;
                $bookVideo->video = 'videos/'.$vidtmp->folder.'/'.$vidtmp->file;
                Storage::deleteDirectory('posts/tmp/' . $vidtmp->folder);
                $vidtmp->delete();
                $bookVideo->save();
            }

            if ($request->has('videos')){
            $folder = $request->videos;
            $i=1;
            $vidtmps = TemporaryFile::whereIn('folder', $folder)->get();
                foreach ($vidtmps as $vidtmp) {
                    Storage::disk()->copy('posts/tmp/' . $vidtmp->folder . '/' . $vidtmp->file, 'videos/' . $vidtmp->folder . '/' . $vidtmp->file);

                    $bookVideo = new BookVideos();
                    $bookVideo->book_id = $book->id; // Make sure to set $book to the appropriate book instance
                    $bookVideo->video_title = "Book Video No: ".$i++; // Assuming you get this from the request
                    $bookVideo->video = 'videos/' . $vidtmp->folder . '/' . $vidtmp->file;
                    $bookVideo->save();

                    Storage::deleteDirectory('posts/tmp/' . $vidtmp->folder);
                    // $vidtmps->delete();
                }
            }

            $tmpVoc = TemporaryFile::where('folder', $request->vocab_file)->first();
            if ($tmpVoc) {
                Storage::disk()->copy('posts/tmp/' . $tmpVoc->folder . '/' . $tmpVoc->file, 'pdfs/' . $tmpVoc->folder . '/' . $tmpVoc->file);

                $bookVocab = new VocabularyPdf();
                $bookVocab->book_id = $book->id;
                $bookVocab->vocab_name = $request->get('vocab_name');
                $bookVocab->file_path = 'pdfs/' . $tmpVoc->folder . '/' . $tmpVoc->file;

                Storage::deleteDirectory('posts/tmp/' . $tmpVoc->folder);
                $tmpVoc->delete();
                $bookVocab->save();

            }

            if ($request->has('vocab_files')){
            $folder3 = $request->vocab_files;
            $ii=1;
            $voctmps = TemporaryFile::whereIn('folder', $folder3)->get();
                foreach ($voctmps as $voctmp) {
                    Storage::disk()->copy('posts/tmp/' . $voctmp->folder . '/' . $voctmp->file, 'videos/' . $voctmp->folder . '/' . $voctmp->file);

                    $bookVocabs = new VocabularyPdf();
                    $bookVocabs->book_id = $book->id; // Make sure to set $book to the appropriate book instance
                    $bookVocabs->vocab_name = "Book Vocabulary No: ".$ii++; // Assuming you get this from the request
                    $bookVocabs->file_path = 'pdfs/' . $voctmp->folder . '/' . $voctmp->file;
                    $bookVocabs->save();

                    Storage::deleteDirectory('posts/tmp/' . $voctmp->folder);
                    // $voctmps->delete();
                }
            }

            DB::commit();
            return redirect()
                ->back()
                ->with('success', 'Book Created!');
        } catch (\Exception $e) {
            // An error occurred, rollback the transaction
            dd($e);
            DB::rollBack();
            return redirect()
                ->back()
                ->with('error', 'Check your form and try again!');
        }
    }

    public function tmpUpload(Request $request)
    {
        $coverImage = $request->file('book_cover_image');
        if ($coverImage) {
            $cover_extension = $coverImage->getClientOriginalExtension();
            $filename = $coverImage->getClientOriginalName();
            $folder = uniqid('post', true);
            $coverImg = $coverImage->storeAs('posts/tmp/' . $folder, $filename);
            $temp_sav = new TemporaryFile();
            $temp_sav->folder = $folder;
            $temp_sav->file = $filename;
            $temp_sav->save();

        }
        return $folder;
    }

    public function tmpDelete()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }

    }

    public function delete_book(Book $book)
    {
        try {
            $book->delete();
            // Redirect back with a success message
            return redirect()
                ->back()
                ->with('success', 'Book deleted successfully.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Unable to delete the book.');
        }
    }

    public function edit_index($id)
    {
        try {
            $book = Book::with(['details', 'quiz', 'vocabularyPdfs', 'content', 'videos', 'genres'])->findOrFail($id);

            return view('admin.book', compact('book'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Book Edit Functionality in Working.');
        }
    }

    public function update_book(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            // Find the book by ID with its relationships
            $book = Book::with(['details', 'quiz', 'vocabularyPdfs', 'content', 'videos', 'genres'])->findOrFail($id);

            // Update book properties based on form data
            $book->title = $request->input('title');
            $book->author = $request->input('author');
            // Update other book properties here...

            // Update related models (if needed)
            if ($book->details) {
                $book->details->intro_video = $request->input('intro_video');
                $book->details->cover_image = $request->input('cover_image');
                $book->details->save();
            }

            // Update quiz questions (if needed)
            foreach ($book->quiz as $quiz) {
                // Update quiz properties based on form data
                $quiz->quiz_name = $request->input('quiz_name');
                $quiz->question = $request->input('quiz_q');
                // Update other quiz properties here...
                $quiz->save();
            }

            // Update other related models (e.g., vocabulary, content, videos, genres) as needed

            // Save the updated book
            $book->save();

            DB::commit();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Book updated successfully.');
        } catch (\Exception $e) {
            // Handle any exceptions, e.g., book not found or validation errors
            DB::rollback();
            return redirect()->back()->with('error', 'Unable to update the book.');
        }
    }


    public function genre(){
        $genre = Genre::all();
        return view('admin.genre', compact('genre'));
    }

    public function create_genre(Request $request){

        $check = Genre::where('genre', $request->title)->first();
        if($check == null){
            $genre = new Genre();
            $genre->genre = $request->title;
            $genre->save();

            if($genre){
                return redirect()
                ->back()
                ->with('success','Genre Created!');
            }else
            {
                return redirect()
                ->back()
                ->with('error', 'Something went wrong, try again!');
            }
        }else{
            return redirect()
            ->back()
            ->with('error', 'Genre already exist, Please try with different name!');
        }

    }

    public function update_genre(Request $request){

        $genre = Genre::find($request->announcement_id);

        if(!$genre)
        {
            return redirect()->back()->with('error','Not enable to edit');
        }

        $genre->genre = $request->input('title');
        $genre->save();

        return redirect()->back()->with('success', 'Genre updated!');
    }

    public function delete_genre(Genre $genre)
    {
        try {
            // Delete the genre
            $genre->delete();
            return redirect()
                ->back()
                ->with('success', 'Genre deleted Successfully.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Unable to delete the Genre.');
        }
    }

    //  new code
    public function uploadCoverImage(Request $request)
{
    // Validate the uploaded file
    $request->validate([
        'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
    ]);

    // Handle the uploaded file
    if ($request->hasFile('cover_image')) {
        $file = $request->file('cover_image');
        $filename = 'book_cover_' . time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/book_covers', $filename);

        // Save the file path to your database (BookDetails model or the relevant table)
        $bookDetails = new BookDetails(); // Adjust the model as needed
        $bookDetails->book_id = $book->id; // Assign the book ID
        $bookDetails->cover_image = $path;
        $bookDetails->save();

        return response()->json(['success' => 'Book cover image uploaded successfully']);
    }

    return response()->json(['error' => 'Unable to upload book cover image'], 500);
}

    public function tmpvUpload(Request $request)
    {
        $introVideo = $request->file('book_intro_video');
        if ($introVideo) {
            $vid_extension = $introVideo->getClientOriginalExtension();
            $filename = $introVideo->getClientOriginalName();
            $folder = uniqid('post', true);
            $coverImg = $introVideo->storeAs('posts/tmp/' . $folder, $filename);
            $temp_sav = new TemporaryFile();
            $temp_sav->folder = $folder;
            $temp_sav->file = $filename;
            $temp_sav->save();

        }
        return $folder;
    }

    public function tmpvDelete()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }

    public function tmpDocUpload(Request $request)
    {
        $coverImage = $request->file('document_file');
        if ($coverImage) {
            $cover_extension = $coverImage->getClientOriginalExtension();
            $filename = $coverImage->getClientOriginalName();
            $folder = uniqid('post', true);
            $coverImg = $coverImage->storeAs('posts/tmp/' . $folder, $filename);
            $temp_sav = new TemporaryFile();
            $temp_sav->folder = $folder;
            $temp_sav->file = $filename;
            $temp_sav->save();

        }
        return $folder;
    }

    public function tmpDocDelete()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }

    public function tmpVocUpload(Request $request)
    {
        $coverImage = $request->file('vocab_file');
        if ($coverImage) {
            $cover_extension = $coverImage->getClientOriginalExtension();
            $filename = $coverImage->getClientOriginalName();
            $folder = uniqid('post', true);
            $coverImg = $coverImage->storeAs('posts/tmp/' . $folder, $filename);
            $temp_sav = new TemporaryFile();
            $temp_sav->folder = $folder;
            $temp_sav->file = $filename;
            $temp_sav->save();

        }
        return $folder;
    }

    public function tmpVocDelete()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }

    public function tmpVidsig(Request $request)
    {
        $video_1 = $request->file('video');
        if ($video_1) {
            $cover_extension = $video_1->getClientOriginalExtension();
            $filename = $video_1->getClientOriginalName();
            $folder = uniqid('post', true);
            $videoo = $video_1->storeAs('posts/tmp/' . $folder, $filename);
            $temp_video = new TemporaryFile();
            $temp_video->folder = $folder;
            $temp_video->file = $filename;
            $temp_video->save();

        }
        return $folder;
    }

    public function tmpVidDel()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }



    public function tmpVidsigm(Request $request)
    {
        $uploadedVideos = $request->file('videos');
        $folder = uniqid('post', true);
        foreach ($uploadedVideos as $file) {
            $cover_extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $videoPath = $file->storeAs('posts/tmp/' . $folder, $filename);
            $temp_video = new TemporaryFile();
            $temp_video->folder = $folder;
            $temp_video->file = $filename;
            $temp_video->save();
        }

        return $folder;
    }

    public function tmpVidDelm()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }

    public function tmpDocsm(Request $request)
    {
        $uploadedVideos = $request->file('document_files');
        $folder = uniqid('post', true);
        foreach ($uploadedVideos as $file) {
            $cover_extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $videoPath = $file->storeAs('posts/tmp/' . $folder, $filename);
            $temp_video = new TemporaryFile();
            $temp_video->folder = $folder;
            $temp_video->file = $filename;
            $temp_video->save();
        }

        return $folder;
    }

    public function tmpDocsmDel()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }

    public function tmpVocm(Request $request)
    {
        $uploadedVideos = $request->file('vocab_files');
        $folder = uniqid('post', true);
        foreach ($uploadedVideos as $file) {
            $cover_extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $videoPath = $file->storeAs('posts/tmp/' . $folder, $filename);
            $temp_video = new TemporaryFile();
            $temp_video->folder = $folder;
            $temp_video->file = $filename;
            $temp_video->save();
        }

        return $folder;
    }

    public function tmpVocsmDel()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }

}
