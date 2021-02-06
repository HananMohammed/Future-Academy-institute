<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if(app()->getLocale() == 'ar') dir="rtl" @endif>
<head>
    <meta charset="utf-8" />
    <title>Future Academy|@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Educo"/>
    <meta name="keywords" content="Educo, html template, Education template" />
    <meta name="author" content="Kamleshyadav"/>
    <meta name="MobileOptimized" content="320" />
    <link href="{{asset_public('front/assets/css/main.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset_public('front/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset_public('front/assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset_public('front/assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset_public('front/assets/css/fonts.css')}}" rel="stylesheet">
    <link href="{{asset_public('front/assets/css/font-awesome.css')}}" rel="stylesheet">
    @if(app()->getLocale()=='ar')
        <!-- compiled and minified CSS -->
            <link
                rel="stylesheet"
                href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
                integrity="sha384-cSfiDrYfMj9eYCidq//oGXEkMc0vuTxHXizrMOFAaPsLt1zoCUVnSsURN+nef1lj"
                crossorigin="anonymous">
            <!-- compiled and minified theme CSS -->
            <link
                rel="stylesheet"
                href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
                integrity="sha384-YNPmfeOM29goUYCxqyaDVPToebWWQrHk0e3QYEs7Ovg6r5hSRKr73uQ69DkzT1LH"
                crossorigin="anonymous">
                <link href="{{asset_public('front/assets/css/style_rtl.css')}}" rel="stylesheet">
    @endif
    <!-- end theme style -->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="{{asset_public('front/assets/images/header/favicon.png')}}" />
    @yield('style')
</head>
<body>

<!--Page main section start-->
<div id="educo_wrapper">
    @include('front.layouts.includes.navbar')
    @yield('content')
    <section class="chat">
        <a href="https://api.whatsapp.com/send?phone=+201000070671" data-toggle="tooltip" data-placement="bottom" title="Whatsapp">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path style="fill:#4CAF50;" d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104
                   l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z"/>
                            <path style="fill:#FAFAFA;" d="M405.024,361.504c-6.176,17.44-30.688,31.904-50.24,36.128c-13.376,2.848-30.848,5.12-89.664-19.264
                   C189.888,347.2,141.44,270.752,137.664,265.792c-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624,26.176-62.304
                   c6.176-6.304,16.384-9.184,26.176-9.184c3.168,0,6.016,0.16,8.576,0.288c7.52,0.32,11.296,0.768,16.256,12.64
                   c6.176,14.88,21.216,51.616,23.008,55.392c1.824,3.776,3.648,8.896,1.088,13.856c-2.4,5.12-4.512,7.392-8.288,11.744
                   c-3.776,4.352-7.36,7.68-11.136,12.352c-3.456,4.064-7.36,8.416-3.008,15.936c4.352,7.36,19.392,31.904,41.536,51.616
                   c28.576,25.44,51.744,33.568,60.032,37.024c6.176,2.56,13.536,1.952,18.048-2.848c5.728-6.176,12.8-16.416,20-26.496
                   c5.12-7.232,11.584-8.128,18.368-5.568c6.912,2.4,43.488,20.48,51.008,24.224c7.52,3.776,12.48,5.568,14.304,8.736
                    C411.2,329.152,411.2,344.032,405.024,361.504z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
            </svg>
        </a>
    </section>
    <section class="talk">
        <p>talk to me</p>

    </section>
    @include('front.layouts.includes.footer')
</div>
<!--main js file start-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="{{asset_public('front/assets/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/jquery-1.12.2.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/smooth-scroll.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/plugins/revel/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/plugins/revel/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/plugins/revel/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/plugins/revel/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/plugins/revel/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/plugins/countto/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/plugins/countto/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/custom.js')}}"></script>
<script type="text/javascript">
    // Hide the extra content initially, using JS so that if JS is disabled, no problemo:
    $('.read-more-content').addClass('hide_content')
    $('.read-more-show, .read-more-hide').removeClass('hide_content')

    // Set up the toggle effect:
    $('.read-more-show').on('click', function(e) {
        $(this).next('.read-more-content').removeClass('hide_content');
        $(this).addClass('hide_content');
        e.preventDefault();
    });

    // Changes contributed by @diego-rzg
    $('.read-more-hide').on('click', function(e) {
        var p = $(this).parent('.read-more-content');
        p.addClass('hide_content');
        p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
        e.preventDefault();
    });
</script>
<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
</script>
<script>
    function animateToTop(e) {
        e.preventDefault();
        var scrollToTop = window.setInterval(function() {
            var pos = window.pageYOffset;
            if ( pos > 0 ) {
                window.scrollTo( 0, pos - 20 );
            } else {
                window.clearInterval( scrollToTop );
            }
        }, 16);
    }

</script>
<script>

    $('.chat').click(function(){
        $(this).find('.chatinfo').fadeIn();
    });
    $('.chatclose').click(function(){
        $('.chatinfo').fadeOut();
    })
    $('.chatinfo').click(function(e){
        e.stopPropagation();
    });
    $('.toggle').click(function(e){
        e.preventDefault();
        e.stopPropagation();
        if($(this).hasClass('hidden')){
            $('.slidde').slideUp();
            $('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            $('.toggle').addClass('hidden');
        }
        $(this).siblings('.slidde').slideToggle();
        if($(this).hasClass('hidden')){
            $(this).find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
            $(this).removeClass('hidden');
        }else{
            $(this).find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            $(this).addClass('hidden');
        }
    });
</script>
@if(app()->getLocale()=='ar')
    <script
        src="https://cdn.rtlcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-B4D+9otHJ5PJZQbqWyDHJc6z6st5fX3r680CYa0Em9AUG6jqu5t473Y+1CTZQWZv"
        crossorigin="anonymous">
    </script>
@endif

@yield('scripts')
<!--main js file end-->
</body>
</html>
