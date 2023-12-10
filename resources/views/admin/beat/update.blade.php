@extends('layouts.app')
@section('content')
    <div class ="card">
        <div class="card-header">Edit Beat</div>
            <div class="card-body">
                <form action="{{ route('admin.beat.update' , ['id'=>$beat->id])  }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="image_beat">Image</label>
                        @if(empty($beat->image_beat))
                            <image class="d-block rounded img-thumbnail" src="{{env('APP_URL') . '/storage/app/'.$value->image_beat}}" width="100" ></image>
                            <span class="d-block small text-danger">Bỏ trống nếu muốn giữ ảnh cũ.</span>
                        @endif
                        <input type="file" class="form-control @error('image_beat') is-invalid @enderror"  id="image_beat" name="image_beat" />
                            @error('image_beat')
                                <div class="invalid-feedback"> <strong >{{$message}}</strong> </div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="typebeat_id">Type Beat</label>
                        <select class="form-select @error('typebeat_id') is-invalid @enderror"  id="typebeat_id" name="typebeat_id" required>
                            <option value="">-- Chooses Type Beat --</option>
                            @foreach($typebeat as $value)
                            <option value="{{ $value->id }}" {{($beat->typebeat_id==$value->id) ? 'selected':'' }}> {{$value->typename}}</option>
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
                            <option value="{{ $value->id }}" {{($beat->musician_id == $value->id) ? 'selected' : '' }}> {{$value->stagename}}</option>
                            @endforeach
                        </select>
                        @error('musician_id')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="beatname">Beat Name</label>
                        <input type="text" class="form-control @error('beatname') is-invalid @enderror" id="beatname"
                            name="beatname" value="{{ $beat->beatname }}" required />
                        @error('beatname')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="file_path">Audio</label>
                        @if(!empty($beat->file_path))
                        <audio src ="{{ env('APP_URL') . '/storage/app/' . $beat->file_path }}" type="audio/mp3" controls>  </audio>
                            <span class="d-block small text-danger">Để trống nếu muốn giữ beat cũ</span>
                        @endif
                            <input type="file" class="form-control @error('file_path') is-invalid @enderror" id="file_path"
                            name="file_path" value="{{$beat->file_path}}" />
                        @error('file_path')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Update to CSDL</button>
                </form>
            </div>
    </div>
@endsection