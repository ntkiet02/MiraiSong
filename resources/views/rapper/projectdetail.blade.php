@extends('layouts.viewtab')
@section('content')
<div class="grid-sizer"></div>
<div class="breadcrumb-option spad set-bg" data-setbg="{{ env('APP_URL') . '/storage/app/'.$project->Beat->image_beat}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">  
                <div class="breadcrumb__text">
                <h1 style="font-size: 80px; color:aqua;"> {{$project->projectname}}</h1>
					<audio id="song">
						<source src="{{ env('APP_URL') . '/storage/app/' . $project->Beat->file_path }}" type="audio/mp3">
					</audio>
                    <input type="range" value="0" id="progress">
                        <div class="controls">
                            <div><i class="fa-solid fa-backward"></i></div>
                            <div onclick="playPause()"><i class="fa-solid fa-play" id="ctrlIcon"></i></i></div>
                            <div><i class="fa-solid fa-forward"></i></div>
                        </div>
                    </div>
                    <script src="{{asset('resources/js/beatdetail.js')}}"></script>
                </div>  
            </div>
        </div>
    </div>
</div>
<section class="contact spad">
	<div class="container">
        <div id="beatapper">
            <form id="paper" method="post" enctype="multipart/form-data">
                <textarea placeholder="Writting any thing" id="text" name="lyric" rows="4" style="overflow: hidden; word-beatap: break-word; resize: none; height: 160px; width: 700px; "> {{$project->lyric}}</textarea>  
            </form>
        </div>
        <script src="{{asset('resources/js/paperline.js')}}"></script>
	</div>
</section>

@endsection
