<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Activities;
use App\Models\Admin\News;
use Illuminate\Http\Request;

class StudentActivitiesController extends Controller
{
    public function index()
    {
        $activity= Activities::first();

        $news = News::orderBy('id', 'desc')->take(3)->get();

        return view('front.activities.index',compact('activity','news'));
    }
}
