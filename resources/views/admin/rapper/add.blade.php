@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Add new Rapper</div>
    <div class="card-body">
        <form action="{{ route('admin.rapper.add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="image_rapper">Image</label>
                <input type="file" class="form-control @error('image_rapper') is-invalid @enderror"  id="image_rapper" name="image_rapper" />
                    @error('image_rapper')
                        <div class="invalid-feedback"> <strong >{{$message}}</strong> </div>
                    @enderror
             </div>
            <div class="mb-3">
                <label class="form-label" for="name"> Rapname </label>
                <input type="text" class="form-control" id="name" name ="name"required></input>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email"> Email </label>
                <input type="text" class="form-control" id="email" name="email" required></input>
            </div>
            <div class="mb-3">
                <label class="form-label" for="role"> Role </label>
                <select class="form-select" id="role" name="role" required>
                    <option value="">---Chooses--</option>
                    <option value="admin">Administrator</option>
                    <option value="rapper" selected>Rapper</option>
                 </select>
            </div>
            <div class ="mb-3">
                <label class="form-label" for="password"> Password </label>
                <input type="password" class="form-control" id="password" name="password" required></input>
            </div>
            <div class ="mb-3">
                <label class="form-label" for="password_confirmation"> Password Confirmation </label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required></input>
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