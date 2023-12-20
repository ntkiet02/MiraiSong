@extends('layouts.frontend')

@section('content')

<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('resources/img/breadcrumb-bg.jpg')}}">
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
<!-- Call To Action Section Begin -->
<section class="contact spad">
 
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="work__item wide__item set-bg play-button audio-background  " data-setbg="{{ env('APP_URL') . '/storage/app/'.$beat->image_beat}}">
                    <a class ="play-btn video-popup"><i class="fa fa-play"></i> </a>
                    <div class="work__item__hover ">
                        <h4>{{$beat->beatname}}/{{$beat->Musician->stagename}}</h4>
                        <audio controls>
                            <source src="{{ env('APP_URL') . '/storage/app/' . $beat->file_path }}" type="audio/mp3">
                        </audio>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <h3>Write Words of Heart</h3>
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" placeholder="Name Project" id="" name="">
                        <textarea placeholder="Lyric"></textarea>
                        <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Uploads to CSDL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->
@endsection