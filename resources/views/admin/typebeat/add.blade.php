@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Add new Type Beat</div>
    <div class="card-body">
        <form action="{{ route('admin.typebeat.add') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="typename">Type Name</label>
                <input type="text" class="form-control" id="typename" name="typename" required />
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Uploads to CSDL</button>
        </form>
    </div>
</div>
@endsection