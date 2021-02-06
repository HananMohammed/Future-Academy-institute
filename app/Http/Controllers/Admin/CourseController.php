<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CourseRequest;
use App\Models\Admin\Course;
use App\Http\Controllers\Controller;
use App\Traits\ImageProcess;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    use ImageProcess;
    /**
     * Display a listing of the Courses.
     *
     * @return view
     */
    public function index()
    {
        $courses = Course::all();

        return view('admin.homepage.courses.index', compact('courses'));

    }
    /**
     * Show the form for creating a new course.
     *
     * @return Response
     */
    public function create()
    {
        $course = new Course();

        return view('admin.homepage.courses.create', compact('course'));
    }

    /**
     * Store a newly created Course in storage.
     *
     * @param    CourseRequest $request
     * @return Response
     */
    public function store(CourseRequest $request)
    {

        $course = new Course();

        $course->create([
            "title" => ['en' => $request->title[0],'ar' => $request->title[1]],
            "text" => ['en' => $request->text[0],'ar' => $request->text[1]],
            "teaching_staff_en" => json_encode( $request->teaching_staff_en),
            "teaching_staff_ar" => json_encode($request->teaching_staff_ar),
            "image" => $request->hasFile('image') ? $this->upload_image($request->file('image')) : $course->image,
            "time" =>$request->time,
            "created_by" => auth()->user()->id
        ]);

        return redirect(route('admin.courses.index'))->with('success' , 'Course Saved Successfully') ;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Course  $course
     * @return Response
     */
    public function edit(course $course)
    {
        return view('admin.homepage.courses.edit', compact('course'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CourseRequest $request
     * @param  Course $course
     * @return Response
     */
    public function update(CourseRequest $request, Course $course)
    {
        $course->update([
            "title" => ['en' => $request->title[0],'ar' => $request->title[1]],
            "text" => ['en' => $request->text[0],'ar' => $request->text[1]],
            "teaching_staff_en" => json_encode( $request->teaching_staff_en),
            "teaching_staff_ar" => json_encode($request->teaching_staff_ar),
            "image" => $request->hasFile('image') ? $this->upload_image($request->file('image')) : $course->image,
            "time" =>$request->time,
            "created_by" => auth()->user()->id
        ]);

        return redirect(route('admin.courses.index'))->with('success' , 'Course Updated Successfully') ;

    }

    /**
     * Remove the specified Course from storage.
     *
     * @param  Course  $course
     * @return Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect(route('admin.courses.index'))->with('success' , 'Department Saved Successfully') ;

    }
}
