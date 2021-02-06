@extends('front.layouts.app')
@section('title','Homepage')
@section('content')
    @include('front.homepage.slider.index')
    @include('front.homepage.department.index')
    @include('front.homepage.about.index')
    @include('front.homepage.courses.index')
    @include('front.homepage.news.index')
@endsection
