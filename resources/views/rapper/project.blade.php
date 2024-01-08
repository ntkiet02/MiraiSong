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
<section class ="hero">
	<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('resources/img/breadcrumb-bg.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="{{env('APP_URL') . '/storage/app/' . Auth::user()->image_rapper}}"class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4>{{Auth::user()->name}}</h4>
									<p class="text-muted font-size-sm">{{Auth::user()->information}}</p>
								</div>
							</div>											
						</div>
							<button class="btn btn-outline-primary"><a href="{{route('rapper.updateprofile',['id'=>Auth::user()->id])}}">Update Profile</a></button>
							<button class="btn btn-outline-primary"><a href="{{route('rapper.home')}}">Back Home</a></button>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="row">
						@foreach($lbtorapper as $pr)					
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body" >
									<h5 class="d-flex align-items-center mb-3">
										<a class="play-btn video-popup" href="{{route('rapper.projectdetail',['beatname_slug' => $pr->Beat->beatname_slug, 'projectname'=>$pr->projectname])}}">{{$pr->projectname}}</a>								
									</h5>				                    
										<img style="height:100px; width:200px;" src="{{env('APP_URL') . '/storage/app/' . $pr->Beat->image_beat}}"></img>				
										<textarea style="height:50px; width:500px;">{{$pr->lyric}}</textarea>
								</div>
								<hr class="my-4">
								<button class="btn btn-outline-primary"><a class="play-btn video-popup" href="{{route('rapper.projectdetail',['beatname_slug' => $pr->Beat->beatname_slug, 'projectname'=>$pr->projectname])}}">View</a></button>
								<button class="btn btn-outline-primary">
									<a href="{{route('rapper.projectupdate',['beatname_slug' => $pr->Beat->beatname_slug, 'projectname'=>$pr->projectname])}}">Edit</a>
								</button>
								<button class="btn btn-outline-primary">
									<a href="{{route('rapper.projectdelete',['beatname_slug' => $pr->Beat->beatname_slug, 'projectname'=>$pr->projectname])}}">Delete</a>
								</button>
								<a  style="text-align:right">{{$pr->created_at}}</a>
							</div>
						</div>		
						@endforeach
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
@endsection