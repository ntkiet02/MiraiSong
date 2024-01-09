@extends('layouts.frontend')
@section('content')
<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('resources/img/navbar.jpg')}}">
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
										<div style="width: 500px;"><a>{{$pr->projectname}}</a></div>								
										<button style="margin-left: 20%;" class="btn btn-outline-primary">
											<a class="play-btn video-popup" href="{{route('rapper.projectdetail',['rapper_id'=>Auth::user()->id,'beatname_slug'=>$pr->Beat->beatname_slug,'projectname_slug'=>$pr->projectname_slug])}}">View</a>
										</button>
										<button style="margin-left: 1%;" class="btn btn-outline-primary">
											<a href="{{route('rapper.projectupdate',['rapper_id'=>Auth::user()->id,'beatname_slug' => $pr->Beat->beatname_slug, 'projectname_slug'=>$pr->projectname_slug])}}">Edit</a>
										</button>
										<button style="margin-left: 1%;" class="btn btn-outline-primary">
											<a href="{{route('rapper.projectdelete',['rapper_id'=>Auth::user()->id,'beatname_slug' => $pr->Beat->beatname_slug, 'projectname_slug'=>$pr->projectname_slug])}}">Delete</a>
										</button>
									</h5>	
										<img style="height:100px; width:200px;" src="{{env('APP_URL') . '/storage/app/' . $pr->Beat->image_beat}}"></img>				
										<textarea style="height:50px; width:500px;">{{$pr->lyric}}</textarea>
								</div>
								<a style="text-align:right">Viết vào: {{$pr->created_at}}</a>
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