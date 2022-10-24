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

// Route::get('/blog', function () {
//     return view('blog.blog');
// });
Auth::routes();

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/blog', [App\Http\Controllers\WelcomeController::class, 'blog'])->name('blog');
Route::get('/blog-detail/{slug}', [App\Http\Controllers\WelcomeController::class, 'blogDetail'])->name('blog-detail');
Route::get('/dokumen', [App\Http\Controllers\WelcomeController::class, 'dokumen'])->name('dokumen');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('beritas', App\Http\Controllers\BeritaController::class);
Route::post('beritas/simpan-tags/{id}', [App\Http\Controllers\BeritaController::class, 'storeTags'])->name('beritas.simpan-tags');
Route::post('upload_image', [App\Http\Controllers\BeritaController::class, 'uploadImage'])->name('upload');

Route::resource('fakultas', App\Http\Controllers\FakultasController::class);
Route::resource('programStudis', App\Http\Controllers\ProgramStudiController::class);
Route::resource('roles', App\Http\Controllers\RolesController::class);
Route::resource('permissions', App\Http\Controllers\PermissionsController::class);
Route::resource('kategoris', App\Http\Controllers\KategoriController::class);
Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('tags', App\Http\Controllers\TagController::class);
Route::resource('beritaTags', App\Http\Controllers\BeritaTagsController::class);
Route::resource('galleries', App\Http\Controllers\GalleryController::class);

Route::resource('dokumens', App\Http\Controllers\DokumenController::class);
