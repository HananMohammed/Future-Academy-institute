<div class="ed_slider_form_section">
    <!--Slider start-->
    <section class="ed_mainslider" @if(app()->getLocale()=='ar') dir="ltr" @endif>
        <article class="content">
            <div class="rev_slider_wrapper">
                <!-- START REVOLUTION SLIDER 5.0 auto mode -->
                <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <div id="rev_slider" class="rev_slider "  data-version="5.0">
                        <ul>
                            <!-- SLIDE  -->
                            @foreach($data["slider"] as $slider)
                            <li data-transition="slotslide-vertical">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset_public('storage/uploads/'.$slider->image)}}"  alt="">
                                <div class="ed_course_single_image_overlay"></div>
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption  NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
                                     data-x="['left','left','left','left']"  data-hoffset="['65','80','80','60']"
                                     data-y="['top','top','top','top']" data-voffset="['170','175','155','115']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-start="1510"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.05"
                                     style="">{{$slider->title}}</div>
                                <div class="tp-caption cap NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
                                    data-x="['left','left','left','left']"  data-hoffset="['65','80','80','60']"
                                     data-y="['top','top','top','top']" data-voffset="['270','255','220','210']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-start="1810"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.05"
                                     style="z-index: 5; white-space: nowrap; font-size: 23px; color:#fff;font-weight: 400;"

                                     >{!! $slider->text !!}</div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption NotGeneric-CallToAction ed_btn ed_green tp-resizeme rs-parallaxlevel-0"
                                     data-x="['left','left','left','left']"  data-hoffset="['65','80','80','60']"
                                     data-y="['top','top','top','top']" data-voffset="['370','296','246','171']"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1500"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; ">@lang('front.see more')
                                </div>

                            </li>
                            @endforeach
                        </ul>
                    </div><!-- END REVOLUTION SLIDER -->
                </div><!-- END  -->
            </div><!-- END REVOLUTION SLIDER WRAPPER -->
        </article>
    </section>
    <!--Slider end-->
    <!--Slider form start-->
    <div class="ed_form_box">
        <div class="container">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-e9a7e03 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e9a7e03" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 100%; left:0px;">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9c87dd5" data-id="9c87dd5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-404d526 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="404d526" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a77b9c7" data-id="a77b9c7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-28549f7 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="28549f7" data-element_type="widget" data-widget_type="image-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image-box-wrapper">
                                                                        <figure class="elementor-image-box-img">
                                                                            <a href="{{route('front.all-courses')}}">
                                                                                <img width="100" height="100" src="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png" data-src="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png" class="attachment-shop_thumbnail size-shop_thumbnail hoverZoomLink lazyloaded" alt="" data-srcset="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/open-book-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/open-book.png 256w" sizes="(max-width: 100px) 100vw, 100px" srcset="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/open-book-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/open-book.png 256w">
                                                                                <noscript>
                                                                                    <img width="100" height="100"   alt="" data-srcset="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/open-book-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/open-book.png 256w"  data-src="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png" data-sizes="(max-width: 100px) 100vw, 100px" class="attachment-shop_thumbnail size-shop_thumbnail lazyload lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                                                                    <noscript>
                                                                                        <img width="100" height="100" src="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png" class="attachment-shop_thumbnail size-shop_thumbnail lazyload" alt="" srcset="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/open-book-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/open-book.png 256w" sizes="(max-width: 100px) 100vw, 100px" />
                                                                                    </noscript>
                                                                            </a>
                                                                        </figure>
                                                                        <div class="elementor-image-box-content">
                                                                            <div class="elementor-image-box-title">
                                                                                <a href=" {{route('front.all-courses')}}">@lang('front.Courses')</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-213e78a" data-id="213e78a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-28549f7 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="28549f7" data-element_type="widget" data-widget_type="image-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image-box-wrapper">
                                                                        <figure class="elementor-image-box-img">
                                                                            <a href="{{route('front.diplomas')}}">
                                                                                <img width="100" height="100" src="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png" data-src="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png" class="attachment-shop_thumbnail size-shop_thumbnail hoverZoomLink lazyloaded" alt="" data-srcset="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/education-1-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/education-1.png 256w" sizes="(max-width: 100px) 100vw, 100px" srcset="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/education-1-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/education-1.png 256w">
                                                                                <noscript>
                                                                                    <img width="100" height="100"   alt="" data-srcset="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/education-1-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/education-1.png 256w"  data-src="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png" data-sizes="(max-width: 100px) 100vw, 100px" class="attachment-shop_thumbnail size-shop_thumbnail lazyload lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                                                                    <noscript>
                                                                                        <img width="100" height="100" src="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png" class="attachment-shop_thumbnail size-shop_thumbnail lazyload" alt="" srcset="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/education-1-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/education-1.png 256w" sizes="(max-width: 100px) 100vw, 100px" />
                                                                                    </noscript>
                                                                            </a>
                                                                        </figure>
                                                                        <div class="elementor-image-box-content">
                                                                            <div class="elementor-image-box-title">
                                                                                <a href="{{route('front.departments')}}">@lang('front.Diplomas')</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4efbd57" data-id="4efbd57" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-column-wrap elementor-element-populated" style="background-color: #07294d;">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-28549f7 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="28549f7" data-element_type="widget" data-widget_type="image-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image-box-wrapper">
                                                                        <figure class="elementor-image-box-img">
                                                                            <a href="{{route('front.contact')}}">
                                                                                <img width="100" height="100" src="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png" data-src="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png" class="attachment-shop_thumbnail size-shop_thumbnail hoverZoomLink lazyloaded" alt="" data-srcset="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat.png 256w" sizes="(max-width: 100px) 100vw, 100px" srcset="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat.png 256w">
                                                                                <noscript>
                                                                                    <img width="100" height="100"   alt="" data-srcset="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat.png 256w"  data-src="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png" data-sizes="(max-width: 100px) 100vw, 100px" class="attachment-shop_thumbnail size-shop_thumbnail lazyload lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                                                                    <noscript>
                                                                                        <img width="100" height="100" src="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png" class="attachment-shop_thumbnail size-shop_thumbnail lazyload" alt="" srcset="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat.png 256w" sizes="(max-width: 100px) 100vw, 100px" />
                                                                                    </noscript>
                                                                            </a>
                                                                        </figure>
                                                                        <div class="elementor-image-box-content">
                                                                            <div class="elementor-image-box-title">
                                                                                <a href="{{route('front.contact')}}">@lang('front.admission')</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
{{--            <section class="elementor-section elementor-inner-section elementor-element elementor-element-404d526 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default col-sm-12 col-xs-12" data-id="404d526" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="	float:left;width:100%;display: flex;background-color:#07294d;border-radius:3px;height:142.3px">--}}
{{--                <div class="elementor-container elementor-column-gap-default col-sm-12 col-xs-12">--}}
{{--                    <div class="elementor-row col-sm-12 col-xs-12">--}}
{{--                        <div class="elementor-column elementor-inner-column elementor-element elementor-element-a77b9c7 col-sm-12 col-xs-12" data-id="a77b9c7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">--}}
{{--                            <div class="elementor-column-wrap elementor-element-populated col-sm-12 col-xs-12">--}}
{{--                                <div class="elementor-widget-wrap">--}}
{{--                                    <div class="elementor-element elementor-element-28549f7 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="28549f7" data-element_type="widget" data-widget_type="image-box.default">--}}
{{--                                        <div class="elementor-widget-container">--}}
{{--                                            <div class="elementor-image-box-wrapper">--}}
{{--                                                <figure class="elementor-image-box-img">--}}
{{--                                                    <a href="{{route('front.all-courses')}}">--}}
{{--                                                        <img width="100" height="100" src="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png" data-src="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png" class="attachment-shop_thumbnail size-shop_thumbnail ls-is-cached lazyloaded hoverZoomLink" alt="" data-srcset="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/open-book-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/open-book.png 256w" sizes="(max-width: 100px) 100vw, 100px" srcset="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/open-book-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/open-book.png 256w">--}}
{{--                                                        <noscript>--}}
{{--                                                            <img width="100" height="100"   alt="" data-srcset="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/open-book-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/open-book.png 256w"  data-src="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png" data-sizes="(max-width: 100px) 100vw, 100px" class="attachment-shop_thumbnail size-shop_thumbnail lazyload lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />--}}
{{--                                                            <noscript>--}}
{{--                                                                <img width="100" height="100" src="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png" class="attachment-shop_thumbnail size-shop_thumbnail lazyload" alt="" srcset="https://rncollege.de/wp-content/uploads/2019/08/open-book-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/open-book-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/open-book.png 256w" sizes="(max-width: 100px) 100vw, 100px" />--}}
{{--                                                            </noscript>--}}
{{--                                                    </a>--}}
{{--                                                </figure>--}}
{{--                                                <div class="elementor-image-box-content">--}}
{{--                                                    <div class="elementor-image-box-title">--}}
{{--                                                        <a href="{{route('front.all-courses')}}">@lang('front.Courses')</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="elementor-column elementor-inner-column elementor-element elementor-element-a77b9c7 col-sm-12 col-xs-12" data-id="a77b9c7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-color: #ffc600;">--}}
{{--                            <div class="elementor-column-wrap elementor-element-populated" style="background-color: #ffc600">--}}
{{--                                <div class="elementor-widget-wrap">--}}
{{--                                    <div class="elementor-element elementor-element-28549f7 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="28549f7" data-element_type="widget" data-widget_type="image-box.default">--}}
{{--                                        <div class="elementor-widget-container">--}}
{{--                                            <div class="elementor-image-box-wrapper">--}}
{{--                                                <figure class="elementor-image-box-img">--}}
{{--                                                    <a href="{{route('front.diplomas')}}">--}}
{{--                                                        <img width="100" height="100" src="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png" data-src="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png" class="attachment-shop_thumbnail size-shop_thumbnail ls-is-cached lazyloaded hoverZoomLink" alt="" data-srcset="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/education-1-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/education-1.png 256w" sizes="(max-width: 100px) 100vw, 100px" srcset="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/education-1-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/education-1.png 256w">--}}
{{--                                                        <noscript>--}}
{{--                                                            <img width="100" height="100"   alt="" data-srcset="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/education-1-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/education-1.png 256w"  data-src="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png" data-sizes="(max-width: 100px) 100vw, 100px" class="attachment-shop_thumbnail size-shop_thumbnail lazyload lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />--}}
{{--                                                            <noscript>--}}
{{--                                                                <img width="100" height="100" src="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png" class="attachment-shop_thumbnail size-shop_thumbnail lazyload" alt="" srcset="https://rncollege.de/wp-content/uploads/2019/08/education-1-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/education-1-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/education-1.png 256w" sizes="(max-width: 100px) 100vw, 100px" />--}}
{{--                                                            </noscript>--}}
{{--                                                        </noscript>--}}
{{--                                                    </a>--}}
{{--                                                </figure>--}}
{{--                                                <div class="elementor-image-box-content">--}}
{{--                                                    <div class="elementor-image-box-title">--}}
{{--                                                        <a href="{{route('front.diplomas')}}">@lang('front.Diplomas')</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="elementor-column elementor-inner-column elementor-element elementor-element-a77b9c7 col-sm-12 col-xs-12" data-id="a77b9c7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">--}}
{{--                            <div class="elementor-column-wrap elementor-element-populated">--}}
{{--                                <div class="elementor-widget-wrap">--}}
{{--                                    <div class="elementor-element elementor-element-28549f7 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="28549f7" data-element_type="widget" data-widget_type="image-box.default">--}}
{{--                                        <div class="elementor-widget-container">--}}
{{--                                            <div class="elementor-image-box-wrapper">--}}
{{--                                                <figure class="elementor-image-box-img">--}}
{{--                                                    <a href="{{route('front.contact')}}">--}}
{{--                                                        <img width="100" height="100" src="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png" data-src="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png" class="attachment-shop_thumbnail size-shop_thumbnail ls-is-cached lazyloaded hoverZoomLink" alt="" data-srcset="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat.png 256w" sizes="(max-width: 100px) 100vw, 100px" srcset="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat.png 256w">--}}
{{--                                                        <noscript>--}}
{{--                                                            <img width="100" height="100"   alt="" data-srcset="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat.png 256w"  data-src="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png" data-sizes="(max-width: 100px) 100vw, 100px" class="attachment-shop_thumbnail size-shop_thumbnail lazyload lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />--}}
{{--                                                            <noscript>--}}
{{--                                                                <img width="100" height="100" src="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png" class="attachment-shop_thumbnail size-shop_thumbnail lazyload" alt="" srcset="https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-100x100.png 100w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat-150x150.png 150w, https://rncollege.de/wp-content/uploads/2019/08/graduation-hat.png 256w" sizes="(max-width: 100px) 100vw, 100px" />--}}
{{--                                                            </noscript>--}}
{{--                                                        </noscript>--}}
{{--                                                    </a>--}}
{{--                                                </figure>--}}
{{--                                                <div class="elementor-image-box-content">--}}
{{--                                                    <div class="elementor-image-box-title">--}}
{{--                                                        <a href="{{route('front.contact')}}">@lang('front.admission')</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
        </div>
    </div>
    <!--Slider form end-->
</div>
