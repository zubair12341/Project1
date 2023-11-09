<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Auth;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'teacher' => 'required|string|max:255',
            'summary' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $course = new Course();

        // Handle the file upload for the cover image
        $singtmp = TemporaryFile::where('folder', $request->cover_image)->first();
        if ($singtmp) {
            Storage::disk()->copy('posts/tmp/'.$singtmp->folder .'/'. $singtmp->file, 'cover_img/' . $singtmp->folder .'/'. $singtmp->file);
            $course->cover_image = 'cover_img/' . $singtmp->folder .'/'. $singtmp->file;
            Storage::deleteDirectory('posts/tmp/' . $singtmp->folder);
            $singtmp->delete();
        }

        $singtmp2 = TemporaryFile::where('folder', $request->other_img1)->first();
        if ($singtmp2) {
            Storage::disk()->copy('posts/tmp/'.$singtmp2->folder .'/'. $singtmp2->file, 'cover_img/' . $singtmp2->folder .'/'. $singtmp2->file);
            $course->other_img1 = 'cover_img/' . $singtmp2->folder .'/'. $singtmp2->file;
            Storage::deleteDirectory('posts/tmp/' . $singtmp2->folder);
            $singtmp2->delete();
        }

        $singtmp3 = TemporaryFile::where('folder', $request->other_img2)->first();
        if ($singtmp3) {
            Storage::disk()->copy('posts/tmp/'.$singtmp3->folder .'/'. $singtmp3->file, 'cover_img/' . $singtmp3->folder .'/'. $singtmp3->file);
            $course->other_img2 = 'cover_img/' . $singtmp3->folder .'/'. $singtmp3->file;
            Storage::deleteDirectory('posts/tmp/' . $singtmp3->folder);
            $singtmp3->delete();
        }

        $singtmp4 = TemporaryFile::where('folder', $request->video1)->first();
        if ($singtmp4) {
            Storage::disk()->copy('posts/tmp/'.$singtmp4->folder .'/'. $singtmp4->file, 'videos/' . $singtmp4->folder .'/'. $singtmp4->file);
            $course->video1 = 'videos/' . $singtmp4->folder .'/'. $singtmp4->file;
            Storage::deleteDirectory('posts/tmp/' . $singtmp4->folder);
            $singtmp4->delete();
        }

        $singtmp5 = TemporaryFile::where('folder', $request->video2)->first();
        if ($singtmp5) {
            Storage::disk()->copy('posts/tmp/'.$singtmp5->folder .'/'. $singtmp5->file, 'videos/' . $singtmp5->folder .'/'. $singtmp5->file);
            $course->video2 = 'videos/' . $singtmp5->folder .'/'. $singtmp5->file;
            Storage::deleteDirectory('posts/tmp/' . $singtmp5->folder);
            $singtmp5->delete();
        }

        $singtmp6 = TemporaryFile::where('folder', $request->video3)->first();
        if ($singtmp6) {
            Storage::disk()->copy('posts/tmp/'.$singtmp6->folder .'/'. $singtmp6->file, 'videos/' . $singtmp6->folder .'/'. $singtmp6->file);
            $course->video3 = 'videos/' . $singtmp6->folder .'/'. $singtmp6->file;
            Storage::deleteDirectory('posts/tmp/' . $singtmp6->folder);
            $singtmp6->delete();
        }


        $course->title = $validatedData['title'];
        $course->teacher = $validatedData['teacher'];
        $course->age_range = $request->age_range;
        $course->summary = $validatedData['summary'];
        $course->price = $validatedData['price'];
        $course->status = $request->status;


        $course->save();

        // Redirect back with a success message
        return redirect()
                ->back()
                ->with('success', 'Course created successfully!');
    }

    public function delete(Course $course)
    {
        try {
            // Delete the course
            $course->delete();
            // Redirect back with a success message
            return redirect()
                ->back()
                ->with('success', 'Course deleted successfully.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Unable to delete the course.');
        }
    }

    public function edit($id)
    {
        try {
            // Find the book by ID with its relationships
            $course = Course::findOrFail($id);
            // dd($course);
            return view('admin.editcourse', compact('course'));

        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Course not found.');
        }
    }

    public function update(Request $request){

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'teacher' => 'required|string|max:255',
            'summary' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $course = Course::find($request->id);
        if (!$course) {
            return redirect()->route('admin.allcourses')->with('error', 'Course not found');
        }

        // Update the course attributes
        $course->title = $request->input('title');
        $course->teacher = $request->input('teacher');
        $course->age_range = $request->input('age_range');
        $course->summary = $request->input('summary');
        $course->price = $request->input('price');
        $course->status = $request->input('status');

        // Handle the cover image if a new one is uploaded
        if ($request->hasFile('cover_image')) {
            $coverImage = $request->file('cover_image');
            $coverImageName = 'cover_' . time() . '.' . $coverImage->getClientOriginalExtension();
            $coverImagePath = $coverImage->storeAs('public/images', $coverImageName);
            $course->cover_image = $coverImagePath;
        }

        // Save the updated course
        $course->save();

        return redirect()
                ->route('admin.allcourses')
                ->with('success', 'Course updated successfully!');
    }

    public function tmpCovrUpload(Request $request)
    {
        $coverImage = $request->file('cover_image');
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

    public function tmpCovrDelete()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }

    }

    public function tmpCovrUpload2(Request $request)
    {
        $coverImage = $request->file('other_img1');
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

    public function tmpCovrDelete2()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }

    }

    public function tmpCovrUpload3(Request $request)
    {
        $coverImage = $request->file('other_img2');
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

    public function tmpCovrDelete3()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }

    }

    // videos functions
    public function tmpVidUpload(Request $request)
    {
        $coverImage = $request->file('video1');
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

    public function tmpVidDelete()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }

    }


    public function tmpVidUpload2(Request $request)
    {
        $coverImage = $request->file('video2');
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

    public function tmpVidDelete2()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }

    }

    public function tmpVidUpload3(Request $request)
    {
        $coverImage = $request->file('video3');
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

    public function tmpVidDelete3()
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
