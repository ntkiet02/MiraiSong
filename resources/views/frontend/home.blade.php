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
@foreach($typebeat as $tb)
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> 
                    <ul class="portfolio__filter">                       
                        <li>{{$tb->typename}}</li>
                        <li class="active" data-filter="{{route('frontend.beat.type',['typename_slug'=>$tb->typename_slug])}}">See More</li>
                    </ul>
                </div>
            </div>          
            <div class="work__gallery">
            @if(!is_null($tb->Beat))  
                @foreach($tb->Beat as $b)
                    <div class="grid-sizer"></div>
                        <div class="work__item wide__item set-bg play-button audio-background  " data-setbg="{{env('APP_URL'). '/storage/app/'.$b->image_beat}}">
                            <a href ="{{route('frontend.beat.detail',['typename_slug'=>$tb->typename_slug,'typename_slug'=>$b->beatname_slug])}}" class ="play-btn video-popup"><i class="fa fa-play"></i> </a> 
                            <div class="work__item__hover ">
                                <h4></h4>
                                <audio controls>
                                    <source src="{{env('APP_URL'). '/storage/app/'.$b->file_path}}" type="audio/mp3">
                                </audio>
                            </div>
                        </div>
                    </div>
                @endforeach

            @else
            <div class="row">
                <div class="col-lg-12"> 
                    <ul class="portfolio__filter">                       
                        <li>Giá trị trên bị Null</li>
                    </ul>
                </div>
            </div>  
            @endif
            
            </div>   
        </div>   
    </section>
@endforeach
<!-- Work Section End -->
@endsection