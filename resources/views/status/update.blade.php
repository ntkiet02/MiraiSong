@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Edit Status</div>
    <div class="card-body">
        <form action="{{ route('status.update', ['id' => $status->id]) }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="statusname">Status</label>
                <input type="text" class="form-control" id="statusname" name="statusname" value="{{ $status->statusname }}"
                    required />
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i>Update</button>
        </form>
    </div>
</div>
@endsection