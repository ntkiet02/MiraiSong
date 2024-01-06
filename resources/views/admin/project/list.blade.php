@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Project</div>
    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr>
                    <th width="1%">#</th>
                    <th width="5%">Rapper</th>
                    <th width="5%">Status</th>
                    <th width="10%">Beat</th>
                    <th width="5%">Project Name</th>
                    <th width="50%">Lyric</th>
                    <th width="5%">recording</th>
                </tr>
            </thead>
            <tbody>
                @foreach($project as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->Rapper->username }}</td>
                    <td>{{ $value->Status->statusname}}</td>
                    <td>{{ $value->Beat->file_path}}</td>
                    <td>{{ $value->projectname}}</td>
                    <td>{{ $value->lyric}}</td>
                    <td>{{ $value->recording}}</td>  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection