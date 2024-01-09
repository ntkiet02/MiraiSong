@extends('layouts.frontend')
@section('content')

<form id="paper" action="{{route('rapper.projectupdate',['rapper_id'=>Auth::user()->id,'beatname_slug' => $project->Beat->beatname_slug, 'projectname_slug'=>$project->projectname_slug])}}" method="post" enctype="multipart/form-data">
@csrf             
<div class="grid-sizer"></div>
<div class="breadcrumb-option spad set-bg" data-setbg="{{ env('APP_URL') . '/storage/app/'.$project->Beat->image_beat}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">  
                <div class="breadcrumb__text">
                    <h1 style="font-size: 80px; color:aqua;"> {{$project->projectname}}</h1>
                    <audio id="song"> 
                        <source src="{{env('APP_URL'). '/storage/app/'.$project->Beat->file_path}}" type="audio/mpeg">
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
            <div id="margin">Title: <input id="title" name="projectname" type="text" value=" {{$project->projectname}}"/></div>
                <textarea placeholder="Writting any thing" id="text" name="lyric" rows="4" style="overflow: hidden; word-beatap: break-word; resize: none; height: 160px; width: 1100px; ">
                    {{$project->lyric}}
                </textarea>  
                <br>              
               
        </div>
        <script src="{{asset('resources/js/paperline.js')}}"></script>
	</div>
    <button style="margin-left:48%" class="btn btn-primary" type="submit">Save</button>
</section>

            
</form>
<!-- Call To Action Section End -->
@endsection 


