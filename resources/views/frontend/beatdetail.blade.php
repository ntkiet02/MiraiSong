@extends('layouts.frontend')

@section('content')

<div class="breadcrumb-option spad set-bg" data-setbg="{{ env('APP_URL') . '/storage/app/'.$beat->image_beat}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">  
                <div class="breadcrumb__text">
                    <h2>{{$beat->beatname}} / {{$beat->Musician->stagename}}</h2>
                </div>  
            </div>
        </div>
    </div>
</div>
    <!-- <div class="contact__form">
        <h3>Write Words of Heart</h3>
        <form action="#" method="post" enctype="multipart/form-data" >
            @csrf
            <input type="text" placeholder="Name Project" id="" name="">
            <textarea placeholder="Lyric"></textarea>
            <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Uploads to CSDL</button>
        </form>
         -->
    <!-- </div> -->
<section class="portfolio spad">
    
    <div id="wrapper">
        <form id="paper" action="" method="post" enctype="multipart/form-data">
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