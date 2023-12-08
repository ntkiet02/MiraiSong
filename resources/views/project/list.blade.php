@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Project</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('project.add') }}" class="btn btn-info"><i class="fa-light fa-plus"></i>Add new</a>
        </p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="45%">Rapper</th>
                    <th width="40%">Status</th>
                    <th width="40%">Time Post</th>
                    <th width="5%">Update</th>
                    <th width="5%">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($project as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->Rapper->username }}</td>
                    <td>
                        <span class="d-block">Beat</span>
                        <table class="table table-bordered table-hover table-sm mb-0">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="5%">Beat</th>
                                </tr>
                            </thead>
                            <tbody>
                                foreach($value->ProjectDetail as $detail)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$detail->Beat->beatname}}</td>
                                    <td>{{$detail->lyric}}</td>
                                    <td>{{$detail->recording}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>{{$value->created_at->fomat('d/m/Y H:i:s')}}</td>
                    <td>{{$value->Status->statusname}}</td>
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