@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Edit Type Beat</div>
    <div class="card-body">
        <form action="{{ route('typebeat.update', ['id' => $typebeat->id]) }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="typename">type name</label>
                <input type="text" class="form-control" id="typename" name="typename" value="{{ $typebeat->typename }}"
                    required />
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i>Update</button>
        </form>
    </div>
</div>
@endsection