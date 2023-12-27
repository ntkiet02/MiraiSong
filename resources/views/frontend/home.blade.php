@extends('layouts.frontend')
@section('content')
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__item set-bg" data-setbg="{{asset('resources/img/Sakura.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span>For website and video editing</span>
                            <h2>Videographer’s Portfolio</h2>
                            <a href="#" class="primary-btn">See more about us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__item set-bg" data-setbg="{{asset('resources/img/Sakura.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span>For website and video editing</span>
                            <h2>Videographer’s Portfolio</h2>
                            <a href="#" class="primary-btn">See more about us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__item set-bg" data-setbg="{{asset('resources/img/Sakura.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span>For website and video editing</span>
                            <h2>Videographer’s Portfolio</h2>
                            <a href="#" class="primary-btn">See more about us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"> 
                <ul class="portfolio__filter">
                    <li class="active" data-filter="*">All</li>
                    @foreach($typebeat as $tb)
                        <li>{{$tb->typename}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="work__gallery">
        @foreach($beat as $b )
        <div class="grid-sizer"></div>
            <div class="work__item wide__item set-bg play-button audio-background  " data-setbg="{{ env('APP_URL') . '/storage/app/'.$b->image_beat}}">
              <a href ="{{route('frontend.beat')}}" class ="play-btn video-popup"><i class="fa fa-play"></i> </a> 
                <div class="work__item__hover ">
                    <h4>{{$b->beatname}}/{{$b->Musician->stagename}}</h4>
                    <audio controls>
                        <source src="{{ env('APP_URL') . '/storage/app/' . $b->file_path }}" type="audio/mp3">
                    </audio>
                </div>
            </div>
        @endforeach
    </div>
    </div>
</section>
<!-- Work Section End -->


@endsection