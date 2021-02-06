@extends('front.layouts.app')
@section('title', $department->title)
@section('content')
<!--Breadcrumb start-->
<div class="ed_pagetitle">
    <div class="ed_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-6">
                <div class="page_title">
                    <h2>@lang('front.future departments')</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{route('front.homepage')}}">@lang('front.homepage')</a></li>
                    <li><i class="fa fa-chevron-left"></i></li>
                    <li><a href="javascript:void(0)">{{ $department->title }}</a></li>
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
                        <img src="{{asset_public('storage/uploads/'.$department->image)}}" alt="event image" />
                    </div>

                    <div class="ed_course_single_tab">
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">@lang('front.description')</a></li>

                                <li role="presentation"><a href="#news" aria-controls="news" role="tab" data-toggle="tab">@lang('front.staff')</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="description">
                                    <div class="ed_course_tabconetent">
                                        <h2>@lang('front.about course')</h2>
                                        <p>{!! $department->text !!}</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="news">
                                    <div class="ed_course_tabconetent">
                                        <h2>@lang('front.Members of the supporting body')</h2>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="upcoming">
                                                @foreach($lessons as $lesson)
                                                    <div class="ed_course_event">
                                                    <h5>{{$lesson->title}}</h5>
                                                    <div>
                                                        <span>@lang('front.organizer')</span>
                                                        @if(app()->getLocale() == 'ar')
                                                            <ul>
                                                                @foreach(json_decode($lesson->teaching_staff_ar) as $staff)
                                                                   <li>{{ $staff }}</li>
                                                                @endforeach
                                                            </ul>
                                                        @else
                                                            <ul>
                                                                @foreach(json_decode($lesson->teaching_staff_en) as $staff)
                                                                    <li>{{ $staff }}</li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!--tab End-->
                </div>
                <div class="ed_time_executor ed_toppadder40">
                    <ul>
                        <li><a href="javascript:void(0)">@lang('front.lessons')</a> <span>@lang('front.estimated time')</span></li>
                        @foreach($lessons as $lesson)
                        <li><a href="{{route('front.courses',["id" => $lesson->id, "slug"=>Illuminate\Support\Str::slug($lesson->title) ])}}">{{$lesson->title}}</a> <span>{{$lesson->time}}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Sidebar Start-->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="sidebar_wrapper_upper">
                    <div class="sidebar_wrapper">
                        <aside class="widget widget_button">
                            <a href="javascript:void(0)" class="ed_btn ed_green">@lang('front.Join this course')</a>
                        </aside>
                        <aside class="widget widget_categories">
                            <h4 class="widget-title">related courses</h4>
                            <ul>
                                @foreach($lessons as $lesson)
                                    <li><a href="{{route('front.courses',["id" => $lesson->id, "slug"=>Illuminate\Support\Str::slug($lesson->title) ])}}"><i class="fa fa-chevron-right"></i>{{$lesson->title}}</a></li>
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
