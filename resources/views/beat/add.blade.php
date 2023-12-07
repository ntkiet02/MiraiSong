@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Add new Beat</div>
    <div class="card-body">
        <form action="{{ route('beat.add') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label" for="typebeat_id">Type Beat</label>
                <select class="form-select" id="typebeat_id" name="typebeat_id" required>
                    <option value="">-- Chooses Type Beat --</option>
                    @foreach($typebeat as $value)
                    <option value="{{ $value->id }}">{{ $value->typename }}</option>
                    @endforeach
                </select>
                @error('typebeat_id')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="musician_id">Musician</label>
                <select class="form-select @error('musician_id') is-invalid @enderror" id="musician_id"
                    name="musician_id" required>
                    <option value="">-- Chooses Musician --</option>
                    @foreach($musician as $value)
                    <option value="{{ $value->id }}">{{ $value->stagename }}</option>
                    @endforeach
                </select>
                @error('musician_id')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="beatname">Beat Name</label>
                <input type="text" class="form-control @error('beatname') is-invalid @enderror" id="beatname"
                    name="beatname" value="{{ old('beatname') }}" required />
                @error('beatname')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
           
            <div class="mb-3">
                <label class="form-label" for="file_path">Audio</label>
                <input type="file" class="form-control @error('file_path') is-invalid @enderror" id="file_path"
                    name="file_path" />
                @error('file_path')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>

                @enderror
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Uploads to CSDL</button>
        </form>
    </div>
</div>
@endsection