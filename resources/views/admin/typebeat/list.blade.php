@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Type Beat</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('admin.typebeat.add') }}" class="btn btn-info"><i class="fa-light fa-plus"></i>Add new</a>
        </p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="45%">Type name</th>
                    <th width="40%">Type name slug</th>
                    <th width="5%">Update</th>
                    <th width="5%">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($typebeat as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->typename }}</td>
                    <td>{{ $value->typename_slug }}</td>
                    <td class="text-center"><a href="{{ route('admin.typebeat.update', ['id' => $value->id]) }}"><i class="bi bi-pencil" style="color: green;"></i></a></td>
                    <td class="text-center"><a href="{{ route('admin.typebeat.delete', ['id' => $value->id]) }}"
                            onclick="return confirm('Bạn có muốn xóa cái {{ $value->typename }} không?')"><i class="bi bi-trash3"></i></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection