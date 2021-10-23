<?php

use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\LabsController;

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

Route::get('/', function () {
    return view('pages.home');
});

// Route::get('/Doctors', function () {
//      return view('pages.doctors');
//  });

Route::resource('/Doctors', DoctorsController::class);
Route::resource('/Labs', LabsController::class);
Route::resource('/Admin', DoctorsController::class);

Route::get('/AddDoctor', [DoctorsController::class, 'addDoctor'])->name('addADoctor');
Route::post('/AddDoctor', [DoctorsController::class, 'store']);
// Route::get('/Admin/dashboard',[ DoctorsController::class,'index'])->name('admin');
// Route::post('/Admin/dashboard/{id}', [ DoctorsController::class , 'update']);
// Route::put('/Admin/dashboard', [ DoctorsController::class , 'update']);

// Route::get('/Admin/dashboard', function () {
//     return view('admin.dashboard');
// });
Route::get('/lapsuser', function () {
    return view('admin.lapsuser');
});
Route::get('/Pharmacies', function () {
    return view('pages.pharmacies');
});

Route::get('/Search', function () {
    return view('pages.search');
});
