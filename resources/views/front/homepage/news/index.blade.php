<!--Latest news start -->
<div class="ed_graysection ed_toppadder80 ed_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ed_bottompadder80">
                <div class="ed_heading_top">
                    <h3>Latest News</h3>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ed_latest_news_slider">
                    <div id="owl-demo2" class="owl-carousel owl-theme" @if(app()->getLocale()=='ar') style="direction: ltr;text-align: left;" @endif>
                       @foreach( $data["news"] as $new )
                        <div class="item">
                            <div class="ed_item_description">
                                <h4>{{ $new->title }}</h4>
                                <p>{{ $new->text }}</p>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</div>
<!--Latest news end -->

<!--Newsletter Section six start-->
<div class="ed_newsletter_section">
    <div class="ed_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="ed_newsletter_section_heading">
                            <h4>@lang('front.Let us inform you about everything important directly.')</h4>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 col-lg-offset-0 col-md-offset-0 col-sm-offset-3 col-xs-offset-3">
                        <div class="row">
                            <div class="ed_newsletter_section_form">
                                <form class="form" action="{{route('front.newsLetter')}}" method="post">
                                    @csrf
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" type="text" placeholder="Enter Your Email" />
                                            @if($errors->has('email'))
                                                <div class="error">{{ $errors->first('email')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <input type="submit" value="@lang('front.confirm')" class="btn ed_btn ed_green"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Newsletter Section six end-->
