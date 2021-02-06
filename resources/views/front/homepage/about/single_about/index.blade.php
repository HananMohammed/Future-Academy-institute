@extends('front.layouts.app')
@section('title','single about')
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
                        <h4>{{$data["about"]->title}}</h4>
                        <p>{{$data["about"]->text}}</p>
                        <span><a href="{{route('front.about')}}" class="">@lang('front.see more')</a></span>
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
    <!--counter section end -->
{{--    <!--Breadcrumb start-->--}}
{{--    <div class="ed_pagetitle">--}}
{{--        <div class="ed_img_overlay"></div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 col-md-4 col-sm-6">--}}
{{--                    <div class="page_title">--}}
{{--                        <h2></h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-8 col-sm-6">--}}
{{--                    <ul class="breadcrumb">--}}
{{--                        <li><a href="{{route('front.homepage')}}">home</a></li>--}}
{{--                        <li><i class="fa fa-chevron-left"></i></li>--}}
{{--                        <li><a href="{{route('front.about')}}">About future</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!--Breadcrumb end-->--}}
{{--    <!--chart section start -->--}}
{{--    <div class="ed_graysection ed_toppadder90 ed_bottompadder90">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                    <div class="ed_heading_top ed_bottompadder50">--}}
{{--                        <h3></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                    <div class="ed_counter_wrapper">--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                            <div class="ed_chart_ratio">--}}
{{--                                <i class="fa fa-line-chart"></i>--}}
{{--                                <h4>Officially the best</h4>--}}
{{--                                <p>Just in case there is anyone looking for it, new expertise to our knowledge base to make you happy as well.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                            <div class="ed_chart_ratio">--}}
{{--                                <i class="fa fa-sliders"></i>--}}
{{--                                <h4>Redesigned website</h4>--}}
{{--                                <p>Just in case there is anyone looking for it, new expertise to our knowledge base to make you happy as well.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                            <div class="ed_chart_ratio">--}}
{{--                                <i class="fa fa-folder-open-o"></i>--}}
{{--                                <h4>We are launching</h4>--}}
{{--                                <p>Just in case there is anyone looking for it, new expertise to our knowledge base to make you happy as well.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- chart Section end -->--}}
{{--    <!-- team member section start -->--}}
{{--    <div class="ed_transprentbg ed_toppadder80 ed_bottompadder80">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                    <div class="ed_heading_top ed_bottompadder50">--}}
{{--                        <h3>our expert team</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="ed_team_wrapper">--}}
{{--                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">--}}
{{--                        <div class="ed_team_member">--}}
{{--                            <div class="ed_team_member_img">--}}
{{--                                <img src="{{ asset('images/2_1.png') }}" alt="item1" class="img-responsive">--}}
{{--                            </div>--}}
{{--                            <div class="ed_team_member_description">--}}
{{--                                <h4><a href="instructor_dashboard.html">Andre House</a></h4>--}}
{{--                                <h5>director</h5>--}}
{{--                                <p>Project-Based Learning is a flexible tool for framing.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">--}}
{{--                        <div class="ed_team_member">--}}
{{--                            <div class="ed_team_member_img">--}}
{{--                                <img src="{{ asset('images/111.png') }}" alt="item1" class="img-responsive">--}}
{{--                            </div>--}}
{{--                            <div class="ed_team_member_description">--}}
{{--                                <h4><a href="instructor_dashboard.html">Major General Dr. / Abdul Hamid Al-Shura</a></h4>--}}
{{--                                <h5>Chairman of the Institute's Board of Directors</h5>--}}
{{--                                <p>The European languages are members of the same fam.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">--}}
{{--                        <div class="ed_team_member">--}}
{{--                            <div class="ed_team_member_img">--}}
{{--                                <img src="{{ asset('images/112.png') }}" alt="item1" class="img-responsive">--}}
{{--                            </div>--}}
{{--                            <div class="ed_team_member_description">--}}
{{--                                <h4><a href="instructor_dashboard.html">Prof. Dr. Fahmy El-Khouly</a></h4>--}}
{{--                                <h5>t.p.o.</h5>--}}
{{--                                <p> The languages only differ in grammar, common words.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">--}}
{{--                        <div class="ed_team_member">--}}
{{--                            <div class="ed_team_member_img">--}}
{{--                                <img src="{{ asset('images/5_1.png') }}" alt="item1" class="img-responsive">--}}
{{--                            </div>--}}
{{--                            <div class="ed_team_member_description">--}}
{{--                                <h4><a href="instructor_dashboard.html">Shy Tommus</a></h4>--}}
{{--                                <h5>h.o.d.</h5>--}}
{{--                                <p>If several languages coalesce, the grammar of the resulting language.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- team member section end -->--}}
{{--    <!--counter section start -->--}}
{{--    <div class="ed_graysection ed_toppadder90 ed_bottompadder90">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                    <div class="ed_heading_top ed_bottompadder50">--}}
{{--                        <h3>Why Choose Us</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                    <div class="ed_counter_wrapper">--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                            <div class="ed_counter">--}}
{{--                                <h2 class="timer" data-from="0" data-to="2600" data-speed="3000"></h2>--}}
{{--                                <h4>Students graduated</h4>--}}
{{--                                <p>Throughout these year we have done amazing work with 250 students..</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                            <div class="ed_counter">--}}
{{--                                <h2 class="timer" data-from="0" data-to="5900" data-speed="3000"></h2>--}}
{{--                                <h4>Competitions won</h4>--}}
{{--                                <p>Only competitions were the ones in the back of the magazines you find..</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                            <div class="ed_counter">--}}
{{--                                <h2 class="timer" data-from="0" data-to="8400" data-speed="3000"></h2>--}}
{{--                                <h4>Classes visited</h4>--}}
{{--                                <p>Can how you setup your classroom impact how students think...</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!--counter section end -->--}}
@endsection

