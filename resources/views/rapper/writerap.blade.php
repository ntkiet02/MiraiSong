@extends('layouts.frontend')

@section('content')

<div class="breadcrumb-option spad set-bg" data-setbg="{{ env('APP_URL') . '/storage/app/'.$wr->Beat->image_beat}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">  
                <div class="breadcrumb__text">
                    <h2>{{$wr->beatname}} / {{$wr->Musician->stagename}}</h2>
                </div>  
            </div>
        </div>
    </div>
</div>
<div class="containerdetail">
    <div class="music-player set-bg" data-setbg="{{ env('APP_URL') . '/storage/app/'.$wr->Beat->image_beat}}">
    <nav>
        <div class="circle">
            <a href="{{route('frontend.home')}}"><i class="fa-solid fa-angle-left"></i></a>
        </div>
        <div class="circle">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
    <h1 style="font-size: 80px; color:aqua;"> {{$wr->Beat->beatname}}</h1>
    <p style="font-size: 60px; color:aqua;">{{$wr->Musician->stagename}}</p>

    <audio id="song"> 
        <source src="{{env('APP_URL'). '/storage/app/'.$wr->Beat->file_path}}" type="audio/mpeg">
    </audio>
    <input type="range" value="0" id="progress">

    <div class="controls">
        <div><i class="fa-solid fa-backward"></i></div>
        <div onclick="playPause()"><i class="fa-solid fa-play" id="ctrlIcon"></i></i></div>
        <div><i class="fa-solid fa-forward"></i></div>
    </div>

    </div>
</div>
<script src="{{asset('resources/js/beatdetail.js')}}"></script>
<section class="portfolio spad">   
    <div id="wrapper">
        <form id="paper" action="{{route('rapper.writerap')}}" method="post" enctype="multipart/form-data">
            <div id="margin">You is: <input id="rapper" type="text" value="{{Auth::user()->name ?? ''}}"></div>
            <div id="margin">Title: <input id="title" type="text" name="title"></div>
            <textarea placeholder="Writting any thing" id="text" name="text" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 160px; "></textarea>  
            <br>
            <input id="button" type="submit" value="Save">	
        </form>
    </div>
    <script src="{{asset('resources/js/paperline.js')}}"></script>   
</section>
<!-- Call To Action Section Begin -->

<!-- Call To Action Section End -->
@endsection