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
    <link rel="stylesheet" href="{{asset('resources/css/paperline.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/beatdetail.css')}}" type="text/css">
    <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
    <script src="https://kit.fontawesome.com/480f370597.js" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> -->
</head>
<body> <!-- Page Preloder -->
    <!-- Cái củ chuối này là hiển thị quay vòng vòng khi tải trang -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <main>
        @yield('content')
    </main>
   
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