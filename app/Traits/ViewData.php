<?php


namespace App\Traits;


use App\Models\Admin\About;
use App\Models\Admin\Advantage;
use App\Models\Admin\Course;
use App\Models\Admin\Department;
use App\Models\Admin\HowWork;
use App\Models\Admin\News;
use App\Models\Admin\Screen;
use App\Models\Admin\Slider;


class ViewData
{
    /**
     * @return array
     */
    public Static function HomepageData()
    {
        $slider = Slider::select('title','text','image')->get();
        $departments = Department::all();
        $about = About::first();
        $courses = Course::all();
        $news = News::all();

        $data = [
            "slider" => $slider,
            "departments" => $departments,
            "about" => $about,
            "news" => $news,
            "courses" => $courses
         ];
        return $data ;
    }
}
