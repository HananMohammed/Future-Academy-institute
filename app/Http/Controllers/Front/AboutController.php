<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\News;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'desc')->take(3)->get();
        $about = About::first();
        return view('front.homepage.about.single_about.index', compact('news', 'about'));
    }

}
