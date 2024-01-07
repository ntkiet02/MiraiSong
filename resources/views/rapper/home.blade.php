@extends('layouts.frontend')
@section('content')
<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('resources/img/breadcrumb-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <div class="breadcrumb__links">
                        <a href="{{route('frontend.home')}}">Home</a>
                        <span>Home, but on the right and can't click </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class ="hero" >
	<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('resources/img/breadcrumb-bg.jpg')}}">
		<div class="container" style="background-color: aquamarine; align-items:center" >
			<button class="btn btn-outline-primary"><a href="{{route('rapper.updateprofile',['id'=>Auth::user()->id])}}">Update Profile</a></button>
			<button class="btn btn-outline-primary"><a href="{{route('rapper.project',['rapper_id'=>Auth::user()->id])}}">View Project</a></button>
		</div>
	</div>
</section>
@endsection