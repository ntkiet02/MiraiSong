@extends('layouts.frontend')
@section('content')
<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('resources/img/navbar.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">  
                <div class="breadcrumb__text">
                    <h2></h2>
                </div>  
            </div>
        </div>
    </div>
</div>

<!-- Call To Action Section Begin -->
<section class="callto spad set-bg" data-setbg="{{asset('resources/img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2>ĐÃ LƯU THÀNH CÔNG</h2>
                        <p>Hãy về trang cá nhân của bạn.</p>
                        <a href="{{route('rapper.project',['rapper_id'=>Auth::user()->id])}}">YOUR PROJECT</a>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Call To Action Section Begin -->

<!-- Call To Action Section End -->
@endsection