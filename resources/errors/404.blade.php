@extends('layouts.frontend')
@section('title', 404)
@section('content')

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>404</h1>
				<h2>Trang Không Tìm Thấy</h2>
			</div>
			<br><a href="{{ route('frontend.home') }}">Home</a></br>
		</div>
	</div>

@endsection