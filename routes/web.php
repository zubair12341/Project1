<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\StudentMiddleware;
use App\Http\Controllers\Auth\SocialLoginController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePagesController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TemporaryFile;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
// Routes which only auth required
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/test', function () {
    return view('test');
});

// Landing Website Routes
Route::get('/', [HomePagesController::class, 'index'])->name('/');
Route::get('/about', [HomePagesController::class, 'about'])->name('about');
Route::get('/books', [HomePagesController::class, 'books'])->name('books');
Route::get('/online-courses', [HomePagesController::class, 'onlinecourse'])->name('onlinecourse');
Route::get('/contact-us', [HomePagesController::class, 'contactus'])->name('contactus');
// Books Routes
Route::get('/book/{book}/{id}', [HomePagesController::class, 'selected_book'])->name('book.select');
Route::get('/book/content/{book}/{id}', [HomePagesController::class, 'content_show'])->name('show.content');
Route::get('/book/choose/genre/{genre}', [HomePagesController::class, 'chose_genre'])->name('chose.genre');
// search route
Route::get('/search-books', [HomePagesController::class, 'search'])->name('search-books');


// Admin Routes
Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin-profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/all-books', [AdminController::class, 'books'])->name('admin.books');
    Route::get('/create-book', [AdminController::class, 'createbook'])->name('admin.createbook');
    Route::post('/store-book', [AdminController::class, 'storebook'])->name('admin.storebook');
    Route::get('/create-course', [AdminController::class, 'createcourse'])->name('admin.createcourse');
    Route::get('/all-courses', [AdminController::class, 'course'])->name('admin.allcourses');
    Route::get('/order-history', [AdminController::class, 'orderhistory'])->name('admin.orderhistory');
    Route::get('/announcements', [AdminController::class, 'admin_announcement'])->name('admin.announcement');
    Route::get('/subscription', [AdminController::class, 'admin_subscription'])->name('admin.subscription');
    Route::get('/settings', [AdminController::class, 'admin_settings'])->name('admin.settings');
    // book filtering by genre
    Route::post('/filter-books', [AdminController::class, 'select_genre'])->name('filter.books');
    // Book action routes
    Route::get('/delete/book/{book}', [AdminController::class, 'delete_book'])->name('delet.book');
    Route::get('/edit/book/{id}', [AdminController::class, 'edit_index'])->name('edit.book.index');
    Route::post('/update/book', [AdminController::class, 'update_book'])->name('update.book');
    // courses routes
    Route::post('/course/store', [CourseController::class, 'store'])->name('admin.store.course');
    Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('admin.courses.edit');
    Route::get('/delete/course/{course}', [CourseController::class, 'delete'])->name('delet.course');
    Route::post('/update/course', [CourseController::class, 'update'])->name('admin.update.course');
    // Announcement
    Route::post('/store/announcement', [AdminController::class, 'create_announc'])->name('admin.store.announc');
    Route::get('/delete/announcement/{announcement}', [AdminController::class, 'delete_announcement'])->name('delet.announcement');
    Route::post('/update/announcement', [AdminController::class, 'update_announcement'])->name('admin.update.announcement');
    // Genre
    Route::get('/genre', [AdminController::class, 'genre'])->name('admin.genre');
    Route::post('/store/genre', [AdminController::class, 'create_genre'])->name('admin.store.genre');
    Route::post('/update/genre', [AdminController::class, 'update_genre'])->name('admin.update.genre');
    Route::get('/delete/genre/{genre}', [AdminController::class, 'delete_genre'])->name('delet.genre');


});

// Student Routes
Route::middleware([StudentMiddleware::class])->prefix('student')->group(function () {
    Route::get('/home', [StudentController::class, 'index'])->name('student.home');
    Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
    Route::get('/student-profile', [StudentController::class, 'profile'])->name('student.profile');
    Route::get('/my-books', [StudentController::class, 'mybooks'])->name('student.books');
    Route::get('/order-history', [StudentController::class, 'orderhistory'])->name('student.orderhistory');
    Route::get('/announcements', [StudentController::class, 'student_announcement'])->name('student.announcement');
    Route::get('/subscription', [StudentController::class, 'student_subscription'])->name('student.subscription');
    Route::get('/settings', [StudentController::class, 'student_settings'])->name('student.settings');
    Route::get('/my-book', [StudentController::class, 'student_book'])->name('student.mybook');
    Route::get('/my-book/lesson', [StudentController::class, 'student_book_lesson'])->name('student.mybook.lesson');
    Route::get('/book/{book}/{id}', [StudentController::class, 'selected_book'])->name('student.book.select');
    Route::get('/book/content/{book}/{id}', [StudentController::class, 'content_show'])->name('student.show.content');
    // add book to list route
    Route::get('/book/{id}', [StudentController::class, 'book_list'])->name('add.list');
    // Referral
    Route::get('/referral', [StudentController::class, 'student_refereal'])->name('student.referal');

});
Route::post('/book/quiz/submit/', [StudentController::class, 'submit_quiz'])->name('quiz.submit');
// notes
Route::post('/save-note', [StudentController::class, 'saveNote']);
Route::get('/get-notes/{bookid}', [StudentController::class, 'getNotes']);
Route::get('/get-result/{bookid}', [StudentController::class, 'fetch_res']);


Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

// Verify real time refferel code
Route::post('validate-referral-code', [HomePagesController::class, 'validateReferralCode']);


/******************** *****/
/* Social Media Routes
/******************** *****/
/* Facebook Login */
Route::get('/login/facebook', [SocialLoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [SocialLoginController::class, 'handleFacebookCallback']);
/* Google Login */
Route::get('/login/google', [SocialLoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [SocialLoginController::class, 'handleGoogleCallback']);





// book create media routes before submit
// cover image
Route::post('/tmp-upload', [AdminController::class, 'tmpUpload']);
Route::delete('/tmp-delete', [AdminController::class, 'tmpDelete']);

// intro video
Route::post('/tmp-upload-intro', [AdminController::class, 'tmpvUpload']);
Route::delete('/tmp-delete-intro', [AdminController::class, 'tmpvDelete']);
// pdf
Route::post('/tmp-upload-doc', [AdminController::class, 'tmpDocUpload']);
Route::delete('/tmp-delete-doc', [AdminController::class, 'tmpDocDelete']);
// vocab
Route::post('/tmp-upload-voc', [AdminController::class, 'tmpVocUpload']);
Route::delete('/tmp-delete-voc', [AdminController::class, 'tmpVocDelete']);
// video upload
Route::post('/tmp-upload-vide', [AdminController::class, 'tmpVidsig']);
Route::delete('/tmp-delete-vide', [AdminController::class, 'tmpVidDel']);
// multiple videos
Route::post('/tmp-upload-videm', [AdminController::class, 'tmpVidsigm']);
Route::delete('/tmp-delete-videm', [AdminController::class, 'tmpVidDelm']);
// multiple docs
Route::post('/tmp-upload-mdoc', [AdminController::class, 'tmpDocsm']);
Route::delete('/tmp-delete-mdoc', [AdminController::class, 'tmpDocsmDel']);
// multiple Vocab
Route::post('/tmp-upload-mvoc', [AdminController::class, 'tmpVocm']);
Route::delete('/tmp-delete-mvoc', [AdminController::class, 'tmpVocsmDel']);

// course routes for media upload
Route::post('/tmp-cover-upload', [CourseController::class, 'tmpCovrUpload']);
Route::delete('/tmp-cover-delete', [CourseController::class, 'tmpCovrDelete']);
Route::post('/tmp-cover-upload2', [CourseController::class, 'tmpCovrUpload2']);
Route::delete('/tmp-cover-delete2', [CourseController::class, 'tmpCovrDelete2']);
Route::post('/tmp-cover-upload3', [CourseController::class, 'tmpCovrUpload3']);
Route::delete('/tmp-cover-delete3', [CourseController::class, 'tmpCovrDelete3']);

// review adding route
Route::post('add/review', [StudentController::class, 'store_review'])->name('add.review');

// video uploads
Route::post('/tmp-vid-upload', [CourseController::class, 'tmpVidUpload']);
Route::delete('/tmp-vid-delete', [CourseController::class, 'tmpVidDelete']);

Route::post('/tmp-vid-upload2', [CourseController::class, 'tmpVidUpload2']);
Route::delete('/tmp-vid-delete2', [CourseController::class, 'tmpVidDelete2']);

Route::post('/tmp-vid-upload3', [CourseController::class, 'tmpVidUpload3']);
Route::delete('/tmp-vid-delete3', [CourseController::class, 'tmpVidDelete3']);


