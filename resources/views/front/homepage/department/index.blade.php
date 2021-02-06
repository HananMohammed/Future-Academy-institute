<!--Our expertise section one start -->
<div class="ed_transprentbg ed_toppadder100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ed_heading_top ed_toppadder50">
                    <h3>@lang('front.Choose-how-you-want-to-learn')</h3>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ed_populer_areas_slider" @if(app()->getLocale()=='ar') style="direction: ltr;text-align: left;" @endif>
                    <div class="owl-carousel owl-theme">
                        @foreach($data["departments"] as $department)
                            <div class="item">
                                <div class="ed_item_img">
                                    <img src="{{asset_public('storage/uploads/'. $department->image)}}" alt="item1" class="img-responsive">
                                </div>
                                <div class="ed_item_description">
                                    <h4>{{$department->title}}</h4>
                                    <p class="truncate-paragraph">{!! substr(strip_tags($department->text), 0, 150)!!}</p>
                                    <a href="{{route('front.single-department',["id"=>$department->id, "slug"=>Illuminate\Support\Str::slug($department->title)])}}" class="ed_getinvolved">@lang('front.get-involved') <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</div>
<!--Our expertise section one end -->
