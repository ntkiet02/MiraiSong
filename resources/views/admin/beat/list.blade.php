@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Status</div>
    <div class="card-body table-responsive">
        <p>
            <a href="{{ route('admin.beat.add') }}" class="btn btn-info"><i class="fa-light fa-plus"></i>Add new</a>
        </p>  
        {{ $beat->links() }}   
        <table class="table table-bordered table-hover table-sm mb-3">
            <thead>
                <tr>
                    <th width ="5%">#</th>
                    <th width ="5%">Type Beat</th>
                    <th width ="5%">Musician</th>
                    <th width ="20%">Beat Name</th>
                    <th width ="30%">Image</th>
                    <th width ="5%">File Path</th>   
                    <th width ="5%">Edit</th>
                    <th width ="5%">Delete</th>                 
                </tr>
            </thead>
            <tbody>
                @foreach($beat as $value)
                <tr>
                    <td>{{ $loop->index + $beat->firstItem() }}</td>
                    <td>{{$value->TypeBeat->typename}}</td>
                    <td>{{$value->Musician->stagename}}</td>
                    <td>{{$value->beatname}}</td>   
                    <td class="text-center"><img src="{{ env('APP_URL') . '/storage/app/'.$value->image_beat}}" width="100" class="img-thumbnail" /> </td> 
                    <td><audio src ="{{ env('APP_URL') . '/storage/app/' . $value->file_path }}" type="audio/mp3" controls>  </audio></td>
                    <td class="text-center"><a href="{{ route('admin.beat.update', ['id' => $value->id]) }}"><i class="bi bi-pencil" style="color: green;"></i></a></td>
                    <td class="text-center"><a href="{{ route('admin.beat.delete', ['id' => $value->id]) }}"
                            onclick="return confirm('Bạn có muốn xóa cái {{ $value->stagename }} không?')"><i class="bi bi-trash3"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $beat->links() }}
    </div>
</div>
@endsection