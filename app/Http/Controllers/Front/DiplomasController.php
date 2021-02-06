<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiplomasController extends Controller
{
    public function index()
    {
        return view('front.diplomas.index');
    }
}
