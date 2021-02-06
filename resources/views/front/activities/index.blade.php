@extends('front.layouts.app')
@section('title',$activity->title)
@section('content')
    <!--video_section Section three start -->
    <div class="ed_parallax_section">
        <div class="ed_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="ed_video_section">
                        <div class="embed-responsive embed-responsive-16by9">
                            <div class="ed_video">
                                <img src="{{asset_public('front/assets/images/7_1.png')}}" style="cursor:pointer"  alt="1" />
                                <div class="ed_img_overlay">
                                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <iframe id="educo_video" class="embed-responsive-item" src="{{$data["about"]->url}}" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="ed_video_section_discription">
                        <h4>{{$activity->title}}</h4>
                        <p style="color: whitesmoke;">{!! $activity->text !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--video_section Section three end -->
    <!--Breadcrumb end-->
    <!--chart section start -->
    <div class="ed_graysection ed_toppadder90 ed_bottompadder90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ed_heading_top ed_bottompadder50">
                        <h3>@lang('front.objectives')</h3>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ed_counter_wrapper">
                        @foreach($news as $new)
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="ed_chart_ratio">
                                    @if($loop->index == 0 )
                                        <i class="fa fa-line-chart"></i>
                                    @elseif($loop->index == 1)
                                        <i class="fa fa-sliders"></i>
                                    @else
                                        <i class="fa fa-folder-open-o"></i>
                                    @endif
                                    <h4>@lang('front.Officially')</h4>
                                    <p>@lang('front.Just')</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chart Section end -->
    <!-- team member section start -->
    <div class="ed_transprentbg ed_toppadder80 ed_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ed_heading_top ed_bottompadder50">
                        <h3>@lang('front.expert')</h3>
                    </div>
                </div>
                <div class="ed_team_wrapper">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="ed_team_member">
                            <div class="ed_team_member_img">
                                <img src="{{ asset_public('front/assets/images/2_1.png') }}" alt="item1" class="img-responsive">
                            </div>
                            <div class="ed_team_member_description">
                                <h4><a href="instructor_dashboard.html">@lang('front.andre')</a></h4>
                                <h5>@lang('front.director')</h5>
                                <p>@lang('front.major')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="ed_team_member">
                            <div class="ed_team_member_img">
                                <img src="{{  asset_public('front/assets/images/111.png') }}" alt="item1" class="img-responsive">
                            </div>
                            <div class="ed_team_member_description">
                                <h4><a href="instructor_dashboard.html">@lang('front.General')</a></h4>
                                <h5>@lang('front.Chairman')</h5>
                                <p>@lang('front.Police')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="ed_team_member">
                            <div class="ed_team_member_img">
                                <img src="{{ asset_public('front/assets/images/112.png') }}" alt="item1" class="img-responsive">
                            </div>
                            <div class="ed_team_member_description">
                                <h4><a href="instructor_dashboard.html">@lang('front.Prof')</a></h4>
                                <h5>t.p.o.</h5>
                                <p>@lang('front.Dean')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="ed_team_member">
                            <div class="ed_team_member_img">
                                <img src="{{ asset_public('front/assets/images/5_1.png') }}" alt="item1" class="img-responsive">
                            </div>
                            <div class="ed_team_member_description">
                                <h4><a href="instructor_dashboard.html">@lang('front.Shy')</a></h4>
                                <h5>h.o.d.</h5>
                                <p>@lang('front.several-lang')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team member section end -->
    <!--counter section start -->
    <div class="ed_graysection ed_toppadder90 ed_bottompadder90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ed_heading_top ed_bottompadder50">
                        <h3>@lang('front.Choose')</h3>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ed_counter_wrapper">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="ed_counter">
                                <h2 class="timer" data-from="0" data-to="2600" data-speed="3000"></h2>
                                <h4>@lang('front.graduated')</h4>
                                <p>@lang('front.Throughout')</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="ed_counter">
                                <h2 class="timer" data-from="0" data-to="5900" data-speed="3000"></h2>
                                <h4>@lang('front.Competitions')</h4>
                                <p>@lang('front.magazines')</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="ed_counter">
                                <h2 class="timer" data-from="0" data-to="8400" data-speed="3000"></h2>
                                <h4>@lang('front.visited')</h4>
                                <p>@lang('front.classroom')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

