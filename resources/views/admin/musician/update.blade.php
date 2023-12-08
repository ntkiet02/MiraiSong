@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Edit Musician</div>
    <div class="card-body">
        <form action="{{ route('admin.musician.update', ['id' => $musician->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="stagename">Stage name</label>
                <input type="text" class="form-control" id="stagename" name="stagename" value="{{ $musician->stagename }}"
                    required />
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i>Update</button>
        </form>
    </div>
</div>
@endsection