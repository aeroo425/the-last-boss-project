<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BroilerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FileController;
use App\Models\Item;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

// Redirect root URL to login
Route::get('/', function () {
    return view('auth.login');
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/login', [LoginController::class, 'authenticate']);

// Halaman setelah login berhasil
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::post('/login', [LoginController::class, 'authenticate']);


Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('profile', ProfileController::class)->name('profile');

Route::get('/market', function () {
    return view('market'); // Pastikan file view 'option1.blade.php' tersedia di folder resources/views
})->name('market');





Route::get('/items', [ItemController::class, 'index']);



Route::get('/index', [ItemController::class, 'index'])->name('index');

Route::get('/detail/broiler', function () {
    return view('broiler');
})->name('broiler');

Route::get('/broiler-form', function () {
    return view('broiler_form');
})->name('broiler.form');


Route::get('/broiler-form', [BroilerController::class, 'create'])->name('broiler.form');
Route::post('/broiler-form', [BroilerController::class, 'store'])->name('broiler.store');

Route::get('/detail/daging', function () {
    return view('daging');
})->name('daging');

Route::get('/detail/telur', function () {
    return view('telur');
})->name('telur');

Route::get('/detail/susu', function () {
    return view('susu');
})->name('susu');

Route::get('/detail/anak', function () {
    return view('anak');
})->name('anak');

Route::get('/detail/sapi', function () {
    return view('sapi');
})->name('sapi');

Route::get('/detail/vaksin', function () {
    return view('vaksin');
})->name('vaksin');

Route::get('/detail/obat', function () {
    return view('obat');
})->name('obat');


Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');



// Route untuk menyimpan file yang diupload
Route::get('/upload', [FileUploadController::class, 'store'])->name('file.store');
Route::post('/upload', [FileUploadController::class, 'store'])->name('file.store');


Route::get('/file-upload', [FileUploadController::class, 'index'])->name('file.upload');
Route::post('/file/upload', [FileUploadController::class, 'upload'])->name('file.upload'); // Konflik

Route::get('/upload', [FileUploadController::class, 'showForm'])->name('file.upload.form');
Route::post('/upload', [FileUploadController::class, 'upload'])->name('file.upload');



Route::get('/file/upload', [FileUploadController::class, 'showForm'])->name('file.upload.form');



Route::get('/list', [ItemController::class, 'index'])->name('list.all');
Route::get('/list/edit/{id}', [ItemController::class, 'edit'])->name('list.edit');
Route::delete('/list/delete/{id}', [ItemController::class, 'destroy'])->name('list.delete');

Route::get('/list', [ItemController::class, 'index'])->name('list.all');

Route::get('/list/edit/{id}', [ItemController::class, 'edit'])->name('list.edit');
Route::post('/list/update/{id}', [ItemController::class, 'update'])->name('list.update');

// Route untuk hapus
Route::delete('/list/delete/{id}', [ItemController::class, 'destroy'])->name('list.delete');


Route::get('/list', [FileController::class, 'indexItems'])->name('list.items');

Route::get('/list', [FileController::class, 'indexItems'])->name('list.all');

Route::get('/list', [FileController::class, 'indexUploads'])->name('list.all');




// Route untuk menyimpan file
// Route untuk menampilkan semua data
Route::get('/list', [FileUploadController::class, 'index'])->name('list.all');

Route::post('/file-upload', [FileUploadController::class, 'upload'])->name('file.upload');





Route::post('/file-upload', [FileUploadController::class, 'upload'])->name('file.store');


Route::get('/upload', [FileUploadController::class, 'showForm'])->name('file.upload.form');
Route::post('/upload', [FileUploadController::class, 'upload'])->name('file.upload');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/login', [LoginController::class, 'login']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Rute untuk proses login
Route::post('login', [LoginController::class, 'login']);

// Rute setelah login berhasil



Route::post('/upload', [FileUploadController::class, 'store'])->name('file.upload');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/files', [FileUploadController::class, 'index'])->name('file.index'); // Menampilkan semua file
Route::get('/file/{id}/edit', [FileUploadController::class, 'edit'])->name('file.edit'); // Menampilkan form edit
Route::put('/file/{id}', [FileUploadController::class, 'update'])->name('file.update'); // Proses update
Route::delete('/file/{id}', [FileUploadController::class, 'destroy'])->name('file.destroy'); // Proses delete




Route::get('/files/{id}/edit', [FileUploadController::class, 'edit'])->name('file.edit');
Route::put('/files/{id}', [FileUploadController::class, 'update'])->name('file.update');

Route::delete('/files/{id}', [FileUploadController::class, 'destroy'])->name('file.destroy');
Route::get('/files/{id}/edit', [FileUploadController::class, 'edit'])->name('file.edit');

Route::get('/items', [ItemController::class, 'index'])->name('items.index');

Route::get('/output_buyer', function () {
    return view('output_buyer');
})->name('output_buyer');

Route::get('/nomer', function () {
    return view('nomer');
})->name('nomer');
