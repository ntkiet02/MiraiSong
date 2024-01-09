@extends('layouts.frontend')
@section('content')
<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('resources/img/navbar.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                <h2>Home</h2>
                    <div class="breadcrumb__links">
                    
                    <a href="{{route('frontend.home')}}">Home</a>
                        <span>Home, but on the right and can't click </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="hero">
    <div class="hero__slider owl-carousel">
    @foreach($lbtorapper as $pr)
        <div class="hero__item set-bg" data-setbg="{{env('APP_URL') . '/storage/app/' . $pr->Beat->image_beat}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span>{{$pr->projectname}}</span>             
                            <a class="play-btn video-popup primary-btn" href="{{route('rapper.projectdetail',['rapper_id'=>Auth::user()->id,'beatname_slug' => $pr->Beat->beatname_slug, 'projectname_slug'=>$pr->projectname])}}">See more about us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</section>
<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('resources/img/breadcrumb-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <div class="breadcrumb__links">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection