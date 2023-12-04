@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Add new Type Beat</div>
    <div class="card-body">
        <form action="{{ route('status.add') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="statusname">Status Name</label>
                <input type="text" class="form-control" id="statusname" name="statusname" required />
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Uploads to CSDL</button>
        </form>
    </div>
</div>
@endsection