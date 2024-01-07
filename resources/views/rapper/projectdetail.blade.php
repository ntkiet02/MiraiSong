@extends('layouts.viewtab')
@section('content')
 <!-- <section class="portfolio spad">
    <-- Call To Action Section Begin --
    <div class="containerdetail">
        
		<div class="col-lg-6 col-md-6">
               
            </div>
    </div>
    
</section>  -->
<section class="contact spad">
	<div class="container">
		<div class="work__item wide__item set-bg play-button audio-background " style="width: 700px;" data-setbg="{{ env('APP_URL') . '/storage/app/'.$project->Beat->image_beat}}">        
			<div class="work__item__hover " style="align-items: center;">
				<audio controls>
					<source src="{{ env('APP_URL') . '/storage/app/' . $project->Beat->file_path }}" type="audio/mp3">
				</audio>
				<div id="margin">Title: <input id="title" type="text" name="projectname" value="{{$project->projectname}}"></div>
			</div>
		</div>
		<div id="beatapper">
			<textarea id="text" name="lyric" rows="4" style="overflow: hidden; word-beatap: break-word; resize: none; height: 160px; width: 700px; "> {{$project->lyric}}</textarea>  			
		</div>
		<script src="{{asset('resources/js/paperline.js')}}"></script>
	</div>
</section>

@endsection
