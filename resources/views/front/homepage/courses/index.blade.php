<!-- Most recomended Courses Section four start -->
<div class="ed_transprentbg ed_toppadder80 ed_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ed_heading_top ed_bottompadder80">
                    <h3>@lang('front.Learner recommended courses')</h3>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <div class="ed_mostrecomeded_course_slider ed_mostrecomededcourseslider" @if(app()->getLocale()=='ar') style="direction: ltr;text-align: left;" @endif>
                    <div id="owl-demo3" class="owl-carousel owl-theme">
                        @foreach($data["courses"] as $course)
                        <div class="item">
                            <div class="ed_item_img">
                                <img src="{{asset_public('storage/uploads/'.$course->image)}}" alt="item1" class="img-responsive">
                            </div>
                            <div class="ed_item_description ed_most_recomended_data">
                                <h4><a href="{{route('front.courses',["id" => $course->id, "slug"=>Illuminate\Support\Str::slug($course->title) ])}}">@lang('front.Maths')</a></h4>
                                <div class="row">
                                    <div class="ed_rating">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="row">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="course_detail">
                                    <div class="course_faculty">
                                        <img src="{{asset_public('front/assets/images/girl.png')}}" alt="">
                                        <a href="{{route('front.courses',["id" => $course->id, "slug"=>Illuminate\Support\Str::slug($course->title) ])}}">{{$course->title}}</a>
                                    </div>
                                </div>
                                <p>{!! substr(strip_tags($course->text), 0, 90) !!}</p>
                                <a href="{{route('front.courses',["id" => $course->id, "slug"=>Illuminate\Support\Str::slug($course->title) ])}}" class="ed_getinvolved">@lang('front.get-involved') <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</div>
<!--Most recomended Courses Section four end -->
