@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Musician</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('musician.add') }}" class="btn btn-info"><i class="fa-light fa-plus"></i>Add new</a>
        </p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="45%">Stage name</th>
                    <th width="40%">Stage name slug</th>
                    <th width="5%">Update</th>
                    <th width="5%">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($musician as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->stagename }}</td>
                    <td>{{ $value->stagename_slug }}</td>
                    <td class="text-center"><a href="{{ route('musician.update', ['id' => $value->id]) }}"><i
                                class="fa-light fa-edit"></i>Edit</a></td>
                    <td class="text-center"><a href="{{ route('musician.delete', ['id' => $value->id]) }}"
                            onclick="return confirm('Bạn có muốn xóa cái {{ $value->stagename }} không?')"><i
                                class="fa-light fa-trash-alt text-danger"></i>Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection