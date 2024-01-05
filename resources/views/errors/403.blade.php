@extends('layouts.frontend')
@section('title', 403)
@section('content')
<div id="notfound">
		<div class="notfound">
			<div class="notfound-403">
				<h1>403</h1>
				<h2>Không Được Phép</h2>
                <h3 class="h5 fw-normal mb-4">Tài khoản không đủ quyền truy cập chức năng này.</h3>
			</div>
			<br><a href="{{ route('frontend.home') }}">Home</a></br>
		</div>
	</div>
@endsection

