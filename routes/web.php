<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeBeatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusicianController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\RapperController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BeatController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Middleware\Guest;

//Đăng ký đăng nhập, quên mật khẩu

Auth::routes();
Route::name('frontend.')->group(function(){
    //Trang Home
    Route::get('/', [HomeController::class,'getHome'])->name('home');
    Route::get('/home', [HomeController::class,'getHome'])->name('home');
    //Trang beat
    Route::get('/beat', [HomeController::class,'getBeat'])->name('beat');
    Route::get('/beat/{typename_slug}', [HomeController::class,'getBeat'])->name('beat.type');    
    Route::get('/beat/{typename_slug}/{beatname_slug}', [HomeController::class,'getBeatDetail'])->name('beat.detail');
    //Xem video da luu
     //Trang beat
});
//Guest
Route::get('/guest/register', [HomeController::class, 'getRegister'])->name('rapper.register');
Route::get('/guest/login', [HomeController::class, 'getLogin'])->name('rapper.login');

Route::prefix('guest')->name('rapper.')->middleware(['auth', 'rapper'])->group(function(){
    //Trang Chủ
    Route::get('/', [GuestController::class, 'getHome'])->name('home');
    Route::get('/home', [GuestController::class, 'getHome'])->name('home');

    // Trong routes/web.php
    Route::get('/create/{beat_id}', [GuestController::class, 'showProject'])->name('create');
    Route::post('/create/{beat_id}', [GuestController::class, 'saveProject'])->name('save');
    Route::get('/createsuccess', [GuestController::class, 'getSuccess'])->name('createsuccess');

    // Trang hồ sơ
    Route::get('/update/{id}', [GuestController::class, 'getUpdate'])->name('updateprofile');
    Route::post('/update/{id}', [GuestController::class, 'postUpdate'])->name('updateprofile');
    // Xem project
    Route::get('/',[GuestController::class,'getProject'])->name('project');
    Route::get('/project/{rapper_id}',[GuestController::class,'getProject'])->name('project');
    Route::get('/project/{rapper_id}/{beatname_slug}/{projectname_slug}}',[GuestController::class,'getProjectDetail'])->name('projectdetail');

    Route::get('/delete/{rapper_id}/{beatname_slug}/{projectname_slug}',[GuestController::class,'deleteProject'])->name('projectdelete');
    Route::get('/update/{rapper_id}/{beatname_slug}/{projectname_slug}',[GuestController::class,'getUpdateProject'])->name('projectupdate');
    Route::post('/update/{rapper_id}/{beatname_slug}/{projectname_slug}',[GuestController::class,'postUpdateProject'])->name('projectupdate');
    //
    // Binh luan
    Route::get('/binhluan/{beat_id}', [GuestController::class, 'getBinhLuan'])->name('comment');
    Route::post('/binhluan/{beat_id}', [GuestController::class, 'postBinhLuan'])->name('commentsave');

    Route::post('/logout',[GuestController::class,'postLogout'])->name('logout');
 
});
//Admin
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function(){
    //Trang Chủ
    Route::get('/',[AdminController::class, 'getHome'])->name('home');
    Route::get('/home',[AdminController::class, 'getHome'])->name('home');
    // Quản lý Type Beat
    Route::get('/typebeat', [TypeBeatController::class, 'getList'])->name('typebeat');
    Route::get('/typebeat/add', [TypeBeatController::class, 'getAdd'])->name('typebeat.add');
    Route::post('/typebeat/add', [TypeBeatController::class, 'postAdd'])->name('typebeat.add');
    Route::get('/typebeat/update/{id}', [TypeBeatController::class, 'getUpdate'])->name('typebeat.update');
    Route::post('/typebeat/update/{id}', [TypeBeatController::class, 'postUpdate'])->name('typebeat.update');
    Route::get('/typebeat/delete/{id}', [TypeBeatController::class, 'getDelete'])->name('typebeat.delete');
    //Quản lý Musician
    Route::get('/musician', [MusicianController::class, 'getList'])->name('musician');
    Route::get('/musician/add', [MusicianController::class, 'getAdd'])->name('musician.add');
    Route::post('/musician/add', [MusicianController::class, 'postAdd'])->name('musician.add');
    Route::get('/musician/update/{id}', [MusicianController::class, 'getUpdate'])->name('musician.update');
    Route::post('/musician/update/{id}', [MusicianController::class, 'postUpdate'])->name('musician.update');
    Route::get('/musician/delete/{id}', [MusicianController::class, 'getDelete'])->name('musician.delete');
    //Quản lý Beat
    Route::get('/beat', [BeatController::class, 'getList'])->name('beat');
    Route::get('/beat/add', [BeatController::class, 'getAdd'])->name('beat.add');
    Route::post('/beat/add', [BeatController::class, 'postAdd'])->name('beat.add');
    Route::get('/beat/update/{id}', [BeatController::class, 'getUpdate'])->name('beat.update');
    Route::post('/beat/update/{id}', [BeatController::class, 'postUpdate'])->name('beat.update');
    Route::get('/beat/delete/{id}', [BeatController::class, 'getDelete'])->name('beat.delete');
    // Quản lý Status
    Route::get('/status', [StatusController::class, 'getList'])->name('status');
    Route::get('/status/add', [StatusController::class, 'getAdd'])->name('status.add');
    Route::post('/status/add', [StatusController::class, 'postAdd'])->name('status.add');
    Route::get('/status/update/{id}', [StatusController::class, 'getUpdate'])->name('status.update');
    Route::post('/status/update/{id}', [StatusController::class, 'postUpdate'])->name('status.update');
    Route::get('/status/delete/{id}', [StatusController::class, 'getDelete'])->name('status.delete');
    // Quản lý Đơn hàng
    Route::get('/project', [ProjectController::class, 'getList'])->name('project');
    // Route::get('/project/add', [ProjectController::class, 'getAdd'])->name('project.add');
    // Route::post('/project/add', [ProjectController::class, 'postAdd'])->name('project.add');
    // Route::get('/project/update/{id}', [ProjectController::class, 'getUpdate'])->name('project.update');
    // Route::post('/project/update/{id}', [ProjectController::class, 'postUpdate'])->name('project.update');
    // Route::get('/project/delete/{id}', [ProjectController::class, 'getDelete'])->name('project.delete');


    // Quản lý Tài khoản người dùng
    Route::get('/rapper', [RapperController::class, 'getList'])->name('rapper');
    Route::get('/rapper/add', [RapperController::class, 'getAdd'])->name('rapper.add');
    Route::post('/rapper/add', [RapperController::class, 'postAdd'])->name('rapper.add');
    Route::get('/rapper/update/{id}', [RapperController::class, 'getUpdate'])->name('rapper.update');
    Route::post('/rapper/update/{id}', [RapperController::class, 'postUpdate'])->name('rapper.update');
    Route::get('/rapper/delete/{id}', [RapperController::class, 'getDelete'])->name('rapper.delete');

    Route::get('/binhluanbaiviet', [CommentController::class, 'getDanhSach'])->name('binhluanbaiviet');
    Route::get('/binhluanbaiviet/xoa/{id}', [CommentController::class, 'getXoa'])->name('binhluanbaiviet.xoa');
    Route::get('/binhluanbaiviet/kiemduyet/{id}', [CommentController::class, 'getKiemDuyet'])->name('binhluanbaiviet.kiemduyet');
    Route::get('/binhluanbaiviet/kichhoat/{id}', [CommentController::class, 'getKichHoat'])->name('binhluanbaiviet.kichhoat');

});


