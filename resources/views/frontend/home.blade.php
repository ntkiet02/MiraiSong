@extends('layouts.frontend')
@section('title', 'Trang chủ')
@section('content')
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__item set-bg" data-setbg="{{asset('resources/img/Sakura.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span>“I’m on top of the world - Because of you”</span>
                            <h2>“All I wanted to do
                                    Is follow you”</h2>
                            <a href="" class="primary-btn">See more about us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio spad">
    @foreach($typebeat as $tb)  
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> 
                    <ul class="portfolio__filter">
                        <li class="active">{{$tb->typename}}</li>
                        @if(count($tb->Beat) > 0)
                            <a class="active" href="{{route('frontend.beat.type',['typename_slug'=>$tb->typename_slug])}}">See More</a>
                        @else
                        <a class="active" href="#">Null</a>
                        @endif
                    </ul>
                </div>
            </div> 
            <div class="work__gallery">  
                @foreach($tb->Beat as $b)
                <div class="grid-sizer"></div>
                    <div class="work__item wide__item set-bg play-button audio-background  " data-setbg="{{env('APP_URL'). '/storage/app/'.$b->image_beat}}">
                        <a class="play-btn video-popup" href="{{route('frontend.beat.detail',['typename_slug'=>$tb->typename_slug,'beatname_slug'=>$b->beatname_slug])}}"><i class="fa fa-play"></i> </a>                       
                        <div class="work__item__hover ">
                            <h4>{{$b->beatname}} /{{$b->Musician->stagename}}</h4>
                            <a href="{{ route('rapper.create', ['beat_id' => $b->id]) }}"><i class="fa fa-send"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</section>


@endsection