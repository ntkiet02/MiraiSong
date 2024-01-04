<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" /> 
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('resources/css/bootstrap.min.css ')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}" type="text/css">
    <style>
    * {
    outline:none;
        border:none;
        margin:0px;
        padding:0px;
        font-family:Courier, monospace;
        }
        body {
            background:#333 url(https://static.tumblr.com/maopbtg/a5emgtoju/inflicted.png) repeat;        
        }
        #paper {
            color:#FFF;
            font-size:20px;
        }
        #margin {
            margin-left:12px;
            margin-bottom:20px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none; 
        }
        #text {
            width:500px;
            overflow:hidden;
            background-color:#FFF;
            color:#222;
            font-family:Courier, monospace;
            font-weight:normal;
            font-size:24px;
            resize:none;
            line-height:40px;
            padding-left:100px;
            padding-right:100px;
            padding-top:45px;
            padding-bottom:34px;
            background-image:url(https://static.tumblr.com/maopbtg/E9Bmgtoht/lines.png), url(https://static.tumblr.com/maopbtg/nBUmgtogx/paper.png);
            background-repeat:repeat-y, repeat;
            -webkit-border-radius:12px;
            border-radius:12px;
            -webkit-box-shadow: 0px 2px 14px #000;
            box-shadow: 0px 2px 14px #000;
            border-top:1px solid #FFF;
            border-bottom:1px solid #FFF;
        }
        #title {
            background-color:transparent;
            border-bottom:3px solid #FFF;
            color:#FFF;
            font-size:20px;
            font-family:Courier, monospace;
            height:28px;
            font-weight:bold;
            width:220px;
        }
        #button {
            cursor:pointer;
            margin-top:20px;
            float:right;
            height:40px;
            padding-left:24px;
            padding-right:24px;
            font-family:Arial, Helvetica, sans-serif;
            font-weight:bold;
            font-size:20px;
            color:#FFF;
            text-shadow: 0px -1px 0px #000000;
            -webkit-border-radius:8px;
            border-radius:8px;
            border-top:1px solid #FFF;
            -webkit-box-shadow: 0px 2px 14px #000;
            box-shadow: 0px 2px 14px #000;
            background-color: #62add6;
            background-image:url(https://static.tumblr.com/maopbtg/ZHLmgtok7/button.png);
            background-repeat:repeat-x;
        }
        #button:active {
            zoom: 1;
            filter: alpha(opacity=80);
            opacity: 0.8;
        }
        #button:focus {
            zoom: 1;
            filter: alpha(opacity=80);
            opacity: 0.8;
        }
        #wrapper {
            width:700px;
            height:auto;
            margin-left:auto;
            margin-right:auto;
            margin-top:24px;
            margin-bottom:100px;
        }
    </style>
    <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> -->
</head>
<body>
    <!-- Page Preloder -->
    <!-- Cái củ chuối này là hiển thị quay vòng vòng khi tải trang -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{ route('frontend.home') }}"><img src="{{asset('resources/img/miku.png')}}" size="20px" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                                <li><a href="#">Beat</a>
                                    <ul class="dropdown"> 
                                        <li><a href="{{ route('frontend.beat.type',['typename_slug'=>'lofi'] ) }}">Lofi</a></li>
                                        <li><a href="{{ route('frontend.beat.type',['typename_slug'=>'trap'] ) }}">Trap</a></li>   
                                        <li><a href="{{ route('frontend.beat.type',['typename_slug'=>'indie-rap'] ) }}">Indie-Rap</a></li>                                            
                                        <!-- oreach($typebeat as $tb)
                                            <li>
                                                @if(isset($tb->typename))
                                                    <a href="{{ isset($tb->typename_slug) ? route('frontend.beat.type', ['typename_slug' => $tb->typename_slug]) : '#' }}">
                                                        {{ $tb->typename }}
                                                    </a>
                                                @endif
                                            </li>
                                        ndforeach -->
                                    </ul>
                                </li>
                                <li><a href="#">Contact</a></li>
                                @if (Route::has('login'))
                                    @auth
                                    <li>
                                        <div class="testimonial__author">
                                            <div class="testimonial__author__pic">       
                                                <img href="#" src="{{env('APP_URL') . '/storage/app/' . Auth::user()->image_rapper}}">
                                            </div>
                                            <div class="testimonial__author__text">
                                                <h5>{{Auth::user()->name}}</h5>
                                                <a class="dropdown-item" href="{{ route('logout') }}" 
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
 
                                            </div>
                                        </div>
                                    </li>
                                    @else
                                    <!-- <li><a href="{{ route('login') }}">Log in</a> </li> -->
                                    <li><a href="{{ route('rapper.login') }}">Log in</a> </li>
                                        @if (Route::has('register'))
                                    <li><a href="{{ route('rapper.register') }}">Register</a> </li>
                                        @endif
                                    @endauth
                                </div>
                                @endif
                               
                            </ul>
                        </nav>
                       
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header> <!-- Header End -->
    <main>
        @yield('content')
    </main>
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__option__item">
                            <h5>About us</h5>
                            <p>&copy; 2024 by Trí Kiệt and Ngọc Hân. MiraiSong là trang web cho phép người dùng xem video, viết lời trên nền nhạc.</p>
                            <a href="#" class="read__more">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>             
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__option__item">
                            <h5>Newsletter</h5>
                            <p>Videoprah is an award-winning, full-service production company specializing.</p>
                            <form action="#">
                                <input type="text" placeholder="Này để chơi chứ không sài được.">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer__copyright__text">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
   
    <script src="{{asset('resources/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('resources/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('resources/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('resources/js/mixitup.min.js')}}"></script>
        <script src="{{asset('resources/js/masonry.pkgd.min.js')}}"></script>
        <script src="{{asset('resources/js/jquery.slicknav.js')}}"></script>
        <script src="{{asset('resources/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('resources/js/main.js')}}"></script>
</body>

</html>