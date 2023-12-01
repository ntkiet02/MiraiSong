<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeBeatController;
use App\Http\Controllers\MusicianController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\RapperController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BeatController;

Auth::routes();
//Trang chủ
Route::get('/',[HomeController::class, 'getHome'])->name('frontend');
Route::get('/home',[HomeController::class, 'getHome'])->name('frontend');
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

