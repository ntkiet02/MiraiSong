@extends('layouts.frontend')

@section('content')
<div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>About us</h2>
                    <div class="breadcrumb__links">
                        <a href="{{route('frontend.home')}}">Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="portfolio spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"> 
                <ul class="portfolio__filter">
                    <li class="active" data-filter="*">All</li>
                    <li>{{$typebeat->typename}}</li>
                </ul>
            </div>
        </div>
        <div class="work__gallery">
            @foreach($listBeattoType as $lbtt )
            <div class="grid-sizer"></div>
                <div class="work__item wide__item set-bg play-button audio-background  " data-setbg="{{ env('APP_URL') . '/storage/app/'.$lbtt->image_beat}}">
                    <a herf="{{route('frontend.beat.detail')}}" class ="play-btn video-popup"><i class="fa fa-play"></i> </a>
                    <div class="work__item__hover ">
                        <h4>{{$lbtt->beatname}}/{{$lbtt->Musician->stagename}}</h4>
                        <audio controls>
                            <source src="{{ env('APP_URL') . '/storage/app/' . $lbtt->file_path }}" type="audio/mp3">
                        </audio>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Work Section End -->
@endsection