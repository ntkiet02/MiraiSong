@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Status</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('beat.add') }}" class="btn btn-info"><i class="fa-light fa-plus"></i>Add new</a>
        </p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr>
                    <th width ="5%">#</th>
                    <th width ="5%">Type Beat</th>
                    <th width ="5%">Musician</th>
                    <th width ="5%">Beat Name</th>
                    <th width ="5%">Time</th>
                    <th width ="5%">File Path</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach($beat as $value)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$value->TypeBeat->typename}}</td>
                    <td>{{$value->Musician->stagename}}</td>
                    <td>{{$value->beatname}}</td>
                    <td>{{$value->time}}</td>
                    
                    <td><audio src ="{{ env('APP_URL') . '/storage/app/' . $value->beatname_slug }}.mp3" type="audio/mp3" controls>  </audio></td>
                </tr>
                @endforeach
            </tbody>
        </table>      
    </div>
</div>
@endsection