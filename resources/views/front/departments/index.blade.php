@extends('front.layouts.app')
@section('title',__('front.Diplomas'))
@section('content')
<!--Breadcrumb start-->
<!--Breadcrumb start-->
<div class="ed_pagetitle">
    <div class="ed_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-6">
                <div class="page_title">
                    <h2>Educo Courses</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{route('front.homepage')}}">@lang('front.homepage')</a></li>
                    <li><i class="fa fa-chevron-left"></i></li>
                    <li><a href="javascript:void(0)">@lang('front.Diplomas')</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<!-- Section eleven start -->
<div class="ed_courses ed_toppadder80 ed_bottompadder80">
    <div class="container">
        <div class="row">
            @foreach($departments as $department)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="ed_mostrecomeded_course">
                    <div class="ed_item_img i_img">
                        <img src="{{asset_public('storage/uploads/'.$department->image)}}" alt="item1" class="img-responsive">
                    </div>
                    <div class="ed_item_description ed_most_recomended_data">
                        <h4 style="margin-bottom: 10px;"><a href="{{route('front.single-department',["id" => $department->id, "slug"=>Illuminate\Support\Str::slug($department->title) ])}}">{{$department->title}}</a></h4>
                        <p>{!! substr(strip_tags($department->text), 0, 150) !!}</p>
                        <a href="{{route('front.single-department',["id" => $department->id, "slug"=>Illuminate\Support\Str::slug($department->title) ])}}" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
               
                    <div class="ed_blog_bottom_pagination">
                        {{ $departments->links()}}
                    </div>
               
            </div>
        </div>
    </div><!-- /.container -->
</div>
<!-- Section eleven end -->

@endsection