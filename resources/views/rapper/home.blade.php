@extends('layouts.frontend')
@section('content')
	
<section class="hero">
    <div class="hero__slider owl-carousel">
    @foreach($lbtorapper as $pr)
        <div class="hero__item set-bg" data-setbg="{{env('APP_URL') . '/storage/app/' . $pr->Beat->image_beat}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span>{{$pr->projectname}}</span>             
                            <a class="play-btn video-popup primary-btn" href="{{route('rapper.projectdetail',['beatname_slug' => $pr->Beat->beatname_slug, 'projectname'=>$pr->projectname])}}">See more about us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</section>


@endsection