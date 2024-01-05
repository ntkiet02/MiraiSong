@extends('layouts.frontend')
@section('title', 403)
@section('content')
<div id="notfound">
		<div class="notfound">
			<div class="notfound-403">
				<h1>403</h1>
				<h2>Không Được Phép Truy Cập</h2>
			</div>
			<br><a href="{{ route('frontend.home') }}">Home</a></br>
		</div>
	</div>
@endsection

