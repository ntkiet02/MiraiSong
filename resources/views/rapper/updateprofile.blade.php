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
<section class="hero">
	<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('resources/img/breadcrumb-bg.jpg')}}">
		<div class="container ">
			<div class="card">
				<div class="card-body">
					<div class="d-flex flex-column align-items-center text-center">
						<img src="{{env('APP_URL') . '/storage/app/' . $rapper->image_rapper}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
						<div class="mt-3">
							<h4>{{$rapper->name}}</h4>
							<p class="text-muted font-size-sm">{{$rapper->information}}</p>
						</div>
					</div>
					<hr class="my-4">
					<ul class="list-group list-group-flush">
						<div class="card-body">
							<div class="row mb-3">
								<form action="{{ route('rapper.updateprofile',['id'=>$rapper->id]) }}" method="post" enctype="multipart/form-data" >
									@csrf
									<div class="mb-3">
										<label class="form-label" for="image_rapper">Image</label>
										@if(empty($rapper->image_rapper))
											<image class="d-block rounded img-thumbnail" src="{{env('APP_URL') . '/storage/app/'.$rapper->image_rapper}}" width="100" ></image>
											<span class="d-block small text-danger">Bỏ trống nếu muốn giữ ảnh cũ.</span>
										@endif
										<input type="file" class="form-control @error('image_rapper') is-invalid @enderror"  id="image_rapper" name="image_rapper" />
											@error('image_rapper')
												<div class="invalid-feedback"> <strong >{{$message}}</strong> </div>
											@enderror
									</div>	
									<div class="mb-3">
										<label class="form-label" for="name"> Rapname </label>
										<input type="text" class="form-control" id="name" name ="name" value="{{$rapper->name}}"required></input>
									</div>
									<div class="mb-3">
										<label class="form-label" for="email"> Email </label>
										<input type="text" class="form-control" id="email" name="email" value ="{{$rapper->email}}" required></input>
									</div>
									<div class="mb-3">
										<label class="form-label" for="role"> Role </label>
										<select class="form-select" id="role" name="role" required>
											<option value="">---Chooses--</option>
											<option value="rapper" {{($rapper->role == 'rapper')?'selected' : ''}} > Rapper</option>
										</select>
									</div>
									<hr class="my-4">
									<div id="change_password_group">
										<div class="mb-3">
											<label class="form-label" for="password">New Password</label>
											<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" />
												@error('password')
												<div class="invalid-feedback"><strong>{{ $message }}</strong></div>
												@enderror
										</div>
										<div class="mb-3">
											<label class="form-label" for="password_confirmation">New Password Confirmation</label>
											<input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" />
												@error('password_confirmation')
												<div class="invalid-feedback"><strong>{{ $message }}</strong></div>
												@enderror
										</div>
									</div>
									<div class="mb-3">
										<label class="form-label" for="information">Information</label>
										<input type="text" class="form-control" id="information" name ="information" required></input>
									</div>
									<button type="submit" class="btn btn-primary">update</button>
								</form>
							</div>	
						</div>
					</ul>
				</div>
			</div>
		</div>		
	</div>
</div>
</section>
			
@endsection