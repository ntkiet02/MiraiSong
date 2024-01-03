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
    Route::get('/viewproject', [HomeController::class,'getViewProject'])->name('viewproject');
    Route::get('/viewproject/{name}', [HomeController::class,'getViewProject'])->name('viewproject.type');    
    Route::get('/viewproject/{name}/{nameprojectdetail}', [HomeController::class,'getViewProjectDetail'])->name('viewproject.detail');
    //Bổ sung các trang con sau
});
//Guest
Route::get('/guest/register', [HomeController::class, 'getRegister'])->name('rapper.register');
Route::get('/guest/login', [HomeController::class, 'getLogin'])->name('rapper.login');

Route::prefix('guest')->name('rapper.')->group(function(){
    //Trang Chủ
    Route::get('/', [GuestController::class, 'getHome'])->name('home');
    Route::get('/home', [GuestController::class, 'getHome'])->name('home');
    //Write Rap
    Route::get('/write-rap',[GuestController::class,'getWriteRap'])->name('writerap');
    Route::post('/write-rap',[GuestController::class,'postWriteRap'])->name('writerap');
    Route::get('/write-rap-success',[GuestController::class,'getWriteRapSuccess'])->name('writerapsuccess');
  
     // View Project
    Route::get('/project',[GuestController::class,'getProject'])->name('project');
    Route::get('/project/{id}',[GuestController::class,'getProject'])->name('project.detail');
    Route::post('/project/{id}',[GuestController::class,'postProject'])->name('project.detail');
    // Update Information
    Route::get('/information',[GuestController::class,'getInformation'])->name('information');
    Route::post('/information',[GuestController::class,'postInformation'])->name('information');
    //Log out
    Route::post('/logout',[GuestController::class,'postLogout'])->name('logout');
 
});
//Admin
Route::prefix('admin')->name('admin.')->group(function(){
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
    Route::get('/project/add', [ProjectController::class, 'getAdd'])->name('project.add');
    Route::post('/project/add', [ProjectController::class, 'postAdd'])->name('project.add');
    Route::get('/project/update/{id}', [ProjectController::class, 'getUpdate'])->name('project.update');
    Route::post('/project/update/{id}', [ProjectController::class, 'postUpdate'])->name('project.update');
    Route::get('/project/delete/{id}', [ProjectController::class, 'getDelete'])->name('project.delete');
    // Quản lý Tài khoản người dùng
    Route::get('/rapper', [RapperController::class, 'getList'])->name('rapper');
    Route::get('/rapper/add', [RapperController::class, 'getAdd'])->name('rapper.add');
    Route::post('/rapper/add', [RapperController::class, 'postAdd'])->name('rapper.add');
    Route::get('/rapper/update/{id}', [RapperController::class, 'getUpdate'])->name('rapper.update');
    Route::post('/rapper/update/{id}', [RapperController::class, 'postUpdate'])->name('rapper.update');
    Route::get('/rapper/delete/{id}', [RapperController::class, 'getDelete'])->name('rapper.delete');
});


