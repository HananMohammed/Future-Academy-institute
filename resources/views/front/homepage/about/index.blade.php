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
