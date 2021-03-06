@extends('front.layouts.app')
@section('title',__('front.diploma'))
@section('content')
    <!--Breadcrumb start-->
    <div class="ed_pagetitle">
        <div class="ed_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-6">
                    <div class="page_title">
                        <h2>@lang('front.diploma')</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-6">
                    <ul class="breadcrumb">
                        <li><a href="{{route('front.homepage')}}">@lang('front.homepage')</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="javascript:void(0)">@lang('front.diploma')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Section fifteen Contact form start-->
    <div class="ed_event_single_contact_address ed_toppadder70 ed_bottompadder70">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row">
                    <div class="ed_event_single_address_info ed_toppadder50 ed_bottompadder50">
                        <h4 class="ed_bottompadder30">@lang('front.contact info')</h4>
                        <p class="ed_bottompadder40 ed_toppadder10">You can always reach us via following contact details. We will give our best to reach you as possible.</p>
                        <p>@lang('front.Phone:') <span>1-220-090-080</span></p>
                        <p>@lang('front.Email:') <a href="#">info@edutioncollege.gov.co.uk</a></p>
                        <p>@lang('front.Website:') <a href="#">http://www.edutioncollege.gov.co.uk</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row">
                    <div class="ed_event_single_address_map">
                        <div id="map">
                            <div class="full-map2  overFl  ">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1727.427552989413!2d31.286964!3d30.0123166!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c2934e8c13c2f8b!2z2KfZhNi02LHZiNmCINin2YPYp9iv2YrZhdmK!5e0!3m2!1sar!2seg!4v1607093101044!5m2!1sar!2seg" width="100%" style="height:350px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Section fifteen Contact form start-->
@endsection
