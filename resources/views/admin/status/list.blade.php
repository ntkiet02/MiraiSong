@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Status</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('admin.status.add') }}" class="btn btn-info"><i class="fa-light fa-plus"></i>Add new</a>
        </p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="40%">Status</th>
                    <th width="5%">Update</th>
                    <th width="5%">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($status as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->statusname }}</td>
                    <td class="text-center"><a href="{{ route('admin.status.update', ['id' => $value->id]) }}"><i
                                class="fa-light fa-edit"></i>Update</a></td>
                    <td class="text-center"><a href="{{ route('admin.status.delete', ['id' => $value->id]) }}"
                            onclick="return confirm('Bạn có muốn xóa cái {{ $value->statusname }} không?')"><i
                                class="fa-light fa-trash-alt text-danger"></i>Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection