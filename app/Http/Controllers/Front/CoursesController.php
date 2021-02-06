<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Course;


class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(6);
        $courses->setPath('courses');
        return view('front.courses.index',compact('courses'));
    }
}
