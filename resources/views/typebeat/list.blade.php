@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Type Beat</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('typebeat.add') }}" class="btn btn-info"><i class="fa-light fa-plus"></i>Add new</a>
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
                    <td class="text-center"><a href="{{ route('typebeat.update', ['id' => $value->id]) }}"><i
                                class="fa-light fa-edit"></i></a></td>
                    <td class="text-center"><a href="{{ route('typebeat.delete', ['id' => $value->id]) }}"
                            onclick="return confirm('Bạn có muốn xóa cái {{ $value->typename }} không?')"><i
                                class="fa-light fa-trash-alt text-danger"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection