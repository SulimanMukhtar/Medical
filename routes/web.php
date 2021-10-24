<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\LabsController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;

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
// Route::resource('/Admin', DoctorsController::class);

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

Route::get('/Panel/Doctor', function () {
    return view('admin.doctorcp');
});

Route::get('/Panel/Drug', function () {
    return view('admin.drugcp');
});

Route::get('/Pharmacies', function () {
    return view('pages.pharmacies');
});

Route::get('/Search', function () {
    return view('pages.search');
});

Auth::routes();

Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.user.login')->name('login');
        Route::view('/register', 'dashboard.user.register')->name('register');
        Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::post('/check', [UserController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {
        Route::view('/home', 'dashboard.user.home')->name('home');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
        Route::get('/add-new', [UserController::class, 'add'])->name('add');
    });
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.admin.login')->name('login');
        Route::post('/check', [AdminController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/home', [AdminController::class, 'index'])->name('home');
        Route::post('/home', [DoctorController::class, 'store'])->name('add');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::post('/home', [LabsController::class, 'store'])->name('lab');
    });
});
