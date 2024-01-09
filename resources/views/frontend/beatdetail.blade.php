@extends('layouts.viewtab')

@section('content')

<section class="portfolio spad">
    <!-- Call To Action Section Begin -->
    <div class="containerdetail">
        <div class="music-player set-bg" data-setbg="{{ env('APP_URL') . '/storage/app/'.$beat->image_beat}}">
        <nav>
            <div class="circle">
                <a href="{{route('frontend.home')}}"><i class="fa-solid fa-angle-left"></i></a>
            </div>
            <div class="circle">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
        <h1 style="font-size: 80px; color:aqua;"> {{$beat->beatname}}</h1>
        <p style="font-size: 60px; color:aqua;">{{$beat->Musician->stagename}}</p>
        <audio id="song"> 
            <source src="{{env('APP_URL'). '/storage/app/'.$beat->file_path}}" type="audio/mpeg">
        </audio>
        <input type="range" value="0" id="progress">

        <div class="controls">
            <div><i class="fa-solid fa-backward"></i></div>
            <div onclick="playPause()"><i class="fa-solid fa-play" id="ctrlIcon"></i></i></div>
            <div><i class="fa-solid fa-forward"></i></div>
        </div>

        </div>
    </div>
    <script src="{{asset('resources/js/beatdetail.js')}}"></script>
   
</section> 
<section class="latest spad">
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Yasuotino</h4>
                            <ul>
                                <li>Jan 03, 2040</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>Dead is like the wind, always by myside</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Ông Ziaos</h4>
                            <ul>
                                <li>Jan 03, 2040</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>Tui năm nay hơn 70 tủi chưa nghe bài nào hây vậy</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Xuân Dịu</h4>
                            <ul>
                                <li>Jan 03, 2040</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>Tôi muốn tắt nắng đi cho màu đừng nhạc hay vlkl </p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        @auth
            <div class="container">
                <div class="footer__option">
                    <div class="row">
                        <div class="footer__option__item">
                            <h5>Bình luận</h5>
                            <p>Videoprah is an award-winning, full-service production company specializing.</p>
                            <form>
                            
                                <input type="text" placeholder="Này để chơi chứ không sài được.">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="container">
                <div class="footer__option">
                    <div class="row">
                        <div class="footer__option__item">
                            <h5>Hãy đăng nhập mới được bình luận</h5>
                        </div>
                    </div>
                </div>
            </div>
        @endauth 
    </section><!-- Latest Blog Section End -->

<!-- Call To Action Section End -->
@endsection