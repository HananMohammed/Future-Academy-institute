@extends('front.layouts.app')
@section('title', $course->title)
@section('content')
<!--Breadcrumb start-->
<div class="ed_pagetitle">
    <div class="ed_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-6">
                <div class="page_title">
                    <h2>Single course</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{route('front.homepage')}}">@lang('front.homepage')</a></li>
                    <li><i class="fa fa-chevron-left"></i></li>
                    <li><a href="{{route('front.all-courses')}}">@lang('front.courses')</a></li>
                    <li><i class="fa fa-chevron-left"></i></li>
                    <li><a href="javascript:void(0)">{{$course->title}}</a></li>
                    <li><i class="fa fa-chevron-left"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<!--Single content start-->
<div class="ed_graysection ed_course_single ed_toppadder80 ed_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="ed_course_single_item">
                    <div class="ed_course_single_image">
                        <img src="{{asset_public('storage/uploads/'.$course->image)}}" alt="event image" />
                    </div>

                    <div class="ed_course_single_tab">
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">description</a></li>
                                <li role="presentation"><a href="#students" aria-controls="students" role="tab" data-toggle="tab">Teaching staff</a></li>
                                <li role="presentation"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">Scientific fields</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="description">
                                    <div class="ed_course_tabconetent">
                                        <h2>@lang('front.about course')</h2>
                                        <p>{!! $course->text !!}</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="students">
                                    <div class="ed_inner_dashboard_info">
                                        <div class="ed_course_single_inner_tab">
                                            <div role="tabpanel">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#upcoming" aria-controls="upcoming" role="tab" data-toggle="tab">@lang('front.upcoming')</a></li>

                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="upcoming">
                                                        <div class="ed_course_event">
                                                            <h5>@lang('front.organizer')</h5>
                                                            <ul>
                                                                @if(app()->getLocale() == 'en')
                                                                    @foreach(json_decode($course->teaching_staff_en) as $staff)
                                                                        <li>{{ $staff }}</li>
                                                                    @endforeach
                                                                @else
                                                                    @foreach(json_decode($course->teaching_staff_ar) as $staff)
                                                                        <li>{{ $staff }}</li>
                                                                    @endforeach
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!--tab End-->
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="events">
                                    <div class="ed_course_tabconetent">
                                        <h2>Scientific fields</h2>
                                        <ul>
                                            @foreach($courses as $course)
                                            <li>{{$course->title}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--tab End-->
                </div>
                <div class="ed_time_executor ed_toppadder40">
                    <ul>
                        <li><a href="javascript:void(0)">lessons</a> <span>estimated time</span></li>
                        @foreach($courses as $course)
                            <li><a href="{{route('front.courses',["id" => $course->id, "slug"=>Illuminate\Support\Str::slug($course->title) ])}}">{{$course->title}}</a> <span>{{$course->time}}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Sidebar Start-->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="sidebar_wrapper_upper">
                    <div class="sidebar_wrapper">
                        <aside class="widget widget_button">
                            <a href="javascript:void(0)" class="ed_btn ed_green">Join this course</a>
                        </aside>
                        <aside class="widget widget_categories">
                            <h4 class="widget-title">related courses</h4>
                            <ul>
                                @foreach($related_courses as $related_course)
                                    <li><a href="{{route('front.courses',["id" => $related_course->id, "slug"=>Illuminate\Support\Str::slug($related_course->title) ])}}"><i class="fa fa-chevron-right"></i>{{$related_course->title}}</a></li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--Sidebar End-->
        </div>
    </div>
</div>
<!--Single content end-->
@endsection
