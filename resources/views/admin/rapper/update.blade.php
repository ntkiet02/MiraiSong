@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Edit Rapper</div>
    <div class="card-body">
        <form action="{{ route('admin.rapper.update',['id'=>$rapper->id]) }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
                <label class="form-label" for="image_rapper">Image</label>
                @if(empty($rapper->image_rapper))
                    <image class="d-block rounded img-thumbnail" src="{{env('APP_URL') . '/storage/app/'.$rapper->image_rapper}}" width="100" ></image>
                    <span class="d-block small text-danger">Bỏ trống nếu muốn giữ ảnh cũ.</span>
                @endif
                <input type="file" class="form-control @error('image_rapper') is-invalid @enderror"  id="image_rapper" name="image_rapper" />
                    @error('image_rapper')
                        <div class="invalid-feedback"> <strong >{{$message}}</strong> </div>
                    @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="name"> Rapname </label>
                <input type="text" class="form-control" id="name" name ="name" value="{{$rapper->name}}"required></input>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email"> Email </label>
                <input type="text" class="form-control" id="email" name="email" value ="{{$rapper->email}}" required></input>
            </div>
            <div class="mb-3">
                <label class="form-label" for="role"> Role </label>
                <select class="form-select" id="role" name="role" required>
                    <option value="">---Chooses--</option>
                    <option value="admin" {{ ($rapper->role == 'admin') ?'selected' : ''}}  >Administrator</option>
                    <option value="rapper" {{($rapper->role == 'rapper')?'selected' : ''}} > Rapper</option>
                 </select>
            </div>
            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" id="change_password_checkbox" name="change_password_checkbox" />
                <label class="form-check-label" for="change_password_checkbox">Change password</label>
            </div>
                
            <div id="change_password_group">
                <div class="mb-3">
                    <label class="form-label" for="password">New Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" />
                        @error('password')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password_confirmation">New Password Confirmation</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" />
                        @error('password_confirmation')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="information">Information</label>
                <input type="text" class="form-control" id="information" name ="information" required></input>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Uploads to CSDL</button>
        </form>
    </div>
</div>
@endsection
@section('javascript')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function () {
        $("#change_password_group").hide();
        $("#change_password_checkbox").change(function () {
            if ($(this).is(":checked")) {
                $("#change_password_group").show();
                $("#change_password_group :input").attr("required", "required");
            }
            else {
                $("#change_password_group").hide();
                $("#change_password_group :input").removeAttr("required");
            }
        });
    });
</script>
@endsection
