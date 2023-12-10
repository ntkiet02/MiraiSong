@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Rapper</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('admin.rapper.add') }}" class="btn btn-info"><i class="fa-light fa-plus"></i>Add new</a>
        </p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="20%">Image</th>
                    <th width="15%">Rapper</th>
                    <th width="15%">Username</th>
                    <th width="40%">Information</th>
                    <th width="20%">Email</th>
                    <th width="5%">Role</th>
                    <th width="5%">Update</th>
                    <th width="5%">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rapper as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-center"><img src="{{ env('APP_URL') . '/storage/app/'.$value->image_rapper}}" width="100" class="img-thumbnail" /> </td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->username }}</td>
                    <td>{{ $value->information}}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->role }}</td>
                    <td class="text-center"><a href="{{ route('admin.rapper.update', ['id' => $value->id]) }}"><i
                                class="fa-light fa-edit"></i>Edit</a></td>
                    <td class="text-center"><a href="{{ route('admin.rapper.delete', ['id' => $value->id]) }}"
                            onclick="return confirm('Bạn có muốn xóa thằng {{ $value->name }} không?')"><i
                                class="fa-light fa-trash-alt text-danger"></i>Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection