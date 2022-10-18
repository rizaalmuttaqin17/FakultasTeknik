<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/blog', function () {
    return view('blog.detail-blog');
});

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('beritas', App\Http\Controllers\BeritaController::class);
Route::resource('fakultas', App\Http\Controllers\FakultasController::class);
Route::resource('programStudis', App\Http\Controllers\ProgramStudiController::class);
Route::resource('roles', App\Http\Controllers\RolesController::class);
Route::resource('permissions', App\Http\Controllers\PermissionsController::class);
Route::resource('kategoris', App\Http\Controllers\KategoriController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
