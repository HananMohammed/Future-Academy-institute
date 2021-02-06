<!--Header start-->
<header id="ed_header_wrapper">
    <div class="ed_header_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="welcome col-lg-5 col-md-7 col-sm-12 col-xs-12">
                        <p>@lang('front.welcome')</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="ed_sociallink col-sm-12 col-xs-12">
                            <span class="follow-us"style="margin-top:-30px;">@lang('front.follow') :</span>
                            <ul>
                                <li><a href="https://www.facebook.com/lmansfutureeng/?ref=bookmarks" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCn0WoI1cq3IWEguwPwAw3gg" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=+201000070671" data-toggle="tooltip" data-placement="bottom" title="Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="ed_info_wrapper col-sm-7 col-xs-7">
                            <a href="#" id="login_button">@lang('front.login')</a>
                            <div id="login_one" class="ed_login_form">
                                <h3>log in</h3>
                                <form class="form">
                                    <div class="form-group">
                                        <label class="control-label">@lang('front.Email :')</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label  class="control-label">@lang('front.Password :')</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit">@lang('front.login')</button>
                                    <!--<a href="">registration</a>	-->
                                    </div>
                                </form>
                            </div>
                            <li style=" list-style-type: none;">/</li>
                            <a href="javascript:void(0)" id="login_button">@lang('front.register')</a>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-2 col-md-2 col-md-2">
                        <ul class="language">
                            <li style="list-style-type: none;float: left;">
                                <a href="{{LaravelLocalization::getLocalizedURL('ar', null, [], true)}}" class="navi-link">
                                    <img src="{{asset_public('admin/assets/media/svg/flags/egypt.svg')}}" alt="">
                                </a>
                            </li>
                            <li class="en" style="list-style-type: none">
                                <a href="{{LaravelLocalization::getLocalizedURL('en', null, [], true)}}" class="navi-link">
                                    <img src="{{asset_public('admin/assets/media/svg/flags/226-united-states.svg')}}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="ed_header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="educo_logo">
                        <a href="/"><img src="{{asset_public('front/assets/images/logoo.png')}}"  alt="logo" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8" style="">
                    <div class="edoco_menu_toggle navbar-toggle" style="background: #167ac6;" data-toggle="collapse" data-target="#ed_menu"> <i class="fa fa-bars"></i>
                    </div>
                    <div class="edoco_menu" style="">
                        <ul class="collapse navbar-collapse" id="ed_menu">
                            <li>
                                <a href="{{route('front.homepage')}}">@lang('front.homepage')</a>
                            </li>
                            <li>
                                <a href="{{route('front.about')}}">@lang('front.about us')</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">@lang('front.Institute Departments')</a>
                                <ul class="sub-menu">
                                    @foreach($data["departments"] as $department)
                                        <li>
                                            <a href="{{route('front.single-department',["id"=>$department->id, "slug"=>Illuminate\Support\Str::slug($department->title)])}}">{{$department->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('front.activities')}}">@lang('front.Student Activities')</a>
                            </li>
                            <li>
                                <a href="{{route('front.events')}}">@lang('front.Events')</a>
                            </li>

                            <li>
                                <a href="{{route('front.contact')}}">@lang('front.contact-us')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2" style="margin-top :35px;">
                    <div class="col-lg-8 col-md-8 col-sm-8" >

                        <div class="educo_call"><i class="fa fa-phone" style="margin-right :20px;"></i>
                            <a href="https://api.whatsapp.com/send?phone=+201069722270"> 01069722270</a></div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <form class="form-inline">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input class="form-control form-control-sm w-50" type="text" placeholder="Search" aria-label="Search" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header end -->
