@extends('layouts.frontend')

@section('content')
<div class="card">
    <div class="card-header">Write rap </div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        Đăt hàng thành công
    </div>
</div>
@endsection