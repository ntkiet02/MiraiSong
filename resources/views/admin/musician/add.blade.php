@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Add new Musician</div>
    <div class="card-body">
        <form action="{{ route('admin.musician.add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="stagename">Stage Name</label>
                <input type="text" class="form-control" id="stagename" name="stagename" required />
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Uploads to CSDL</button>
        </form>
    </div>
</div>
@endsection