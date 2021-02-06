<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Course;

class SingleCourseController extends Controller
{
    public function index($id, $slug)
    {
        $course = Course::find($id);
        $courses = Course::all();
        $related_courses = Course::where('id', '!=', $id)->get();
        return view('front.homepage.courses.single_course.index',compact('related_courses', 'course', 'courses'));
    }
}
