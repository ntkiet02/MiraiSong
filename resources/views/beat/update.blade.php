@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Edit Beat</div>
    <div class="card-body">
        <form action="{{ route('beat.update', ['id' => $beat->id]) }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="beatname">  Beat name</label>
                <input type="text" class="form-control" id="stagename" name="stagename" value="{{ $musician->stagename }}"
                    required />
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i>Update</button>
        </form>
    </div>
</div>
@endsection