@extends('layouts.viewtab')

@section('content')

<section class="portfolio spad">
<!-- Call To Action Section Begin -->
<div class="containerdetail">
    <div class="music-player set-bg" data-setbg="{{ env('APP_URL') . '/storage/app/'.$beat->image_beat}}">
    <nav>
        <div class="circle">
            <a href="{{route('frontend.home')}}"><i class="fa-solid fa-angle-left"></i></a>
        </div>
        <div class="circle">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
    <h1 style="font-size: 80px; color:aqua;"> {{$beat->beatname}}</h1>
    <p style="font-size: 60px; color:aqua;">{{$beat->Musician->stagename}}</p>

    <audio id="song"> 
        <source src="{{env('APP_URL'). '/storage/app/'.$beat->file_path}}" type="audio/mpeg">
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
</section>
<!-- Call To Action Section End -->
@endsection