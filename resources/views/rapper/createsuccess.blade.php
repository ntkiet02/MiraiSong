@extends('layouts.frontend')
@section('content')
<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('resources/img/breadcrumb-bg.jpg')}}">
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
<script src="{{asset('resources/js/beatdetail.js')}}"></script>
<section class="contact spad">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-12 text-center">  
                <div class="breadcrumb__text">
                    <h2><a class="active">Đã thêm thành công.</a></h2>
                    <h2><a class="active">Vào trang cá nhân của bạn.</a></h2>
                </div>  
            </div>
        </div>
        
    </div>     
</section>
<!-- Call To Action Section Begin -->

<!-- Call To Action Section End -->
@endsection