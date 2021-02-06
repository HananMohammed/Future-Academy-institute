<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Course;
use App\Models\Admin\Department;
use App\Models\Admin\Lessons;
use Illuminate\Http\Request;

class SingleDepartmentController extends Controller
{
    public function index($id, $slug)
    {
        $department = Department::find($id);
        $lessons = [];
        if (is_string(json_decode($department->lessons)))
        {
            $lesson = (array)json_decode($department->lessons);
            $lesson =  Course::find($lesson);
            array_push($lessons, $lesson);

        }
        else
        {
            foreach (json_decode($department->lessons) as $lesson)
            {
                $lesson =  Course::find($lesson);
                array_push($lessons, $lesson);
            }

        }

        return view('front.homepage.department.single_department.index',compact('department','lessons'));
    }
}
