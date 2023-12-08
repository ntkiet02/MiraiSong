@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Status</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('admin.beat.add') }}" class="btn btn-info"><i class="fa-light fa-plus"></i>Add new</a>
        </p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr>
                    <th width ="5%">#</th>
                    <th width ="5%">Type Beat</th>
                    <th width ="5%">Musician</th>
                    <th width ="5%">Beat Name</th>
                    <th width ="5%">File Path</th>   
                    <th width ="5%">Edit</th>
                    <th width ="5%">Delete</th>                 
                </tr>
            </thead>
            <tbody>
                @foreach($beat as $value)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$value->TypeBeat->typename}}</td>
                    <td>{{$value->Musician->stagename}}</td>
                    <td>{{$value->beatname}}</td>    
                    <td><audio src ="{{ env('APP_URL') . '/storage/app/' . $value->file_path }}" type="audio/mp3" controls>  </audio></td>
                    <td class="text-center"><a href="{{ route('admin.beat.update', ['id' => $value->id]) }}"><i
                                class="fa-light fa-edit"></i>Edit</a></td>
                    <td class="text-center"><a href="{{ route('admin.beat.delete', ['id' => $value->id]) }}"
                            onclick="return confirm('Bạn có muốn xóa cái {{ $value->stagename }} không?')"><i
                                class="fa-light fa-trash-alt text-danger"></i>Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>      
    </div>
</div>
@endsection