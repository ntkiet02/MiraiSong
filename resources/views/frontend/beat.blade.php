@extends('layouts.frontend')

@section('content')
 <!-- Breadcrumb Begin -->

    <div class="breadcrumb-option spad set-bg" data-setbg="resources/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">  
                    <div class="breadcrumb__text">
                        <h2>ALL OF TYPE</h2>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <section class="work">
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
                 <!-- <button style="position:absolute; margin:center; height:100px; width:100px; border-radius:20%;opacity: 0.5;">Start</button> -->
                 <a class ="play-btn video-popup"><i class="fa fa-play"></i> </a>
                    <div class="work__item__hover ">
                        <h4>{{$b->beatname}}/{{$b->Musician->stagename}}</h4>
                        <audio controls>
                          <source src="{{ env('APP_URL') . '/storage/app/' . $b->file_path }}" type="audio/mp3">
                        </audio>
                    </div>
                </div>
                @endforeach
        </div>
    </section>
    <!-- Work Section End -->


@endsection