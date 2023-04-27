<?php

use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

Route::get('/siswas', function () {
    return view('siswa.index');
})->middleware(['auth', 'verified'])->name('siswas');


Route::resource('siswas', SiswaController::class); 
Route::resource('teachers', TeacherController::class);
Route::resource('rooms', RoomController::class);
Route::resource('dashboard', SiswaController::class);
Route::resource('absences', AbsenceController::class);

Route::post('/absen/update', 'AbsenController@update')->name('absen.update');