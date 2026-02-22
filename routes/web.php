<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\BookController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/books', BookController::class);
    Route::resource('/anggota', \App\Http\Controllers\admin\AnggotaController::class,);

});