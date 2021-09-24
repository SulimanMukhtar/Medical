<?php
use App\Http\Controllers\DoctorsController;

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
//     return view('pages.doctors');
// });

Route::resource('/Doctors', DoctorsController::class);
Route::get('/Admin',[ DoctorsController::class,'addDoctor']);
Route::post('/Admin/store','DoctorsController@store')->name('addADoctor');
Route::get('/Pharmacies', function () {
    return view('pages.pharmacies');
});

Route::get('/Labs', function () {
    return view('pages.labs');
});

Route::get('/Search', function () {
    return view('pages.search');
});
