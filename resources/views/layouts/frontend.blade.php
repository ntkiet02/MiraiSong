<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale() )}}">

<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Videograph Template"/>
    <meta name="keywords" content="Videograph, unica, creative, html"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title','Trang chủ') - {{ config('app.name','Laravel')}}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css ')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/ss/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/slicknav.min.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ asset('public/css/style.css')}}" type="text/css">
</head>
<body>
    <main>
     <!-- Header Section Begin -->
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header__nav__option">
                            <nav class="header__nav__menu mobile-menu">
                                <ul>
                                    <li class="active"><a href="./index.html">Home</a></li>
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./portfolio.html">Portfolio</a></li>
                                    <li><a href="./services.html">Services</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./about.html">About</a></li>
                                            <li><a href="./portfolio.html">Portfolio</a></li>
                                            <li><a href="./blog.html">Blog</a></li>
                                            <li><a href="./blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./contact.html">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="header__nav__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </header>
        <!-- Header End -->
        @yield('content')
    </main>
    
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
                            <a href="#"><i class="fa fa-facebook"></i></a>
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
                            <p>&copy; 2024 byTrí Kiệt and Ngọc Hân. MiraiSong là trang web siu cấp vip pro không được bất kỳ giải thưởng hay người dùng cũng như feedback nào. Huhu</p>
                            <a href="#" class="read__more">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Our work</h5>
                            <ul>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Browse Archive</a></li>
                                <li><a href="#">Video for web</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__option__item">
                            <h5>Newsletter</h5>
                            <p>Videoprah is an award-winning, full-service production company specializing.</p>
                            <form action="#">
                                <input type="text" placeholder="Email">
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
    <!-- Js Plugins -->
    <script src="{{ asset('public/js/jquery-3.3.1.min.js ')}}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js ')}}"></script>
    <script src="{{ asset('public/js/jquery.magnific-popup.min.js ')}}"></script>
    <script src="{{ asset('public/js/mixitup.min.js ')}}"></script>
    <script src="{{ asset('public/js/masonry.pkgd.min.js ')}}"></script>
    <script src="{{ asset('public/js/jquery.slicknav.js ')}}"></script>
    <script src="{{ asset('public/js/owl.carousel.min.js ')}}"></script>
    <script src="{{ asset('public/js/main.js ')}}"></script>
</body>