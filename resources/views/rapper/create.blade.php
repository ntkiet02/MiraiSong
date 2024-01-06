@extends('layouts.frontend')
@section('content')

<div class="breadcrumb-option spad set-bg" data-setbg="{{ env('APP_URL') . '/storage/app/'.$beat->image_beat}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">  
                <div class="breadcrumb__text">
                    <h2></h2>
                </div>  
            </div>
        </div>
    </div>
</div>
<script src="{{asset('resources/js/beatdetail.js')}}"></script>
<section class="contact spad">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-12 text-center">  
                <div class="breadcrumb__text">
                    <h2><a class="active">Thông tin</a></h2>
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div id="beatapper">
                    <form id="paper" action="{{route('rapper.save',['beat_id'=>$beat_id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div id="margin">You is: <input id="title" type="text" value="    {{Auth::user()->name ?? ''}}"/></div>
                        <div id="margin">Title: <input id="title" type="text" name="projectname"></div>
                        <textarea placeholder="Writting any thing" id="text" name="lyric" rows="4" style="overflow: hidden; word-beatap: break-word; resize: none; height: 160px; "></textarea>  
                        <br>              
                        <button type="submit">Save</button>
                    </form>
                </div>
                    <script src="{{asset('resources/js/paperline.js')}}"></script>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="containerdetail" style="height: auto;">
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
                        <audio controls id="song"> 
                            <source src="{{env('APP_URL'). '/storage/app/'.$beat->file_path}}" type="audio/mpeg">
                        </audio>
                        <input type="range" value="0" id="progress">
                        <div class="controls">
                            <div><i class="fa-solid fa-backward"></i></div>
                            <div onclick="playPause()"><i class="fa-solid fa-play" id="ctrlIcon"></i></i></div>
                            <div><i class="fa-solid fa-forward"></i></div>
                        </div>
                        <script src="{{asset('resources/js/beatdetail.js')}}"></script>
                    </div>
                </div>  
            </div>
        </div>
    </div>     
</section>
<!-- Call To Action Section Begin -->

<!-- Call To Action Section End -->
@endsection