<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Appointments;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\Drug\DrugController;
use App\Http\Controllers\DrugsController;
use App\Http\Controllers\HomeVisits;
use App\Http\Controllers\lab\LabmController;
use App\Http\Controllers\LabsController;
use App\Http\Controllers\LabTestsController;
use App\Http\Controllers\PharmaciesController;
use App\Http\Controllers\phm\PhmController;
use App\Http\Controllers\TestMenus;
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
Route::resource('/Panel/Drug', DrugsController::class);

Route::get('/AddDoctor', [DoctorsController::class, 'addDoctor'])->name('addADoctor');
Route::post('/AddDoctor', [DoctorsController::class, 'store']);
Route::post('/SubmitAppointment', [Appointments::class, 'store'])->name('makeAppoint');
Route::PUT('/Update/{id}', [Appointments::class, 'update'])->name('updateStatus');
Route::post('/SubmitVisit', [HomeVisits::class, 'store'])->name('submitVisit');
Route::post('/checklogin', [LabsController::class, 'check'])->name('labcheck');
Route::post('/addtest', [TestMenus::class, 'store'])->name('AddTest');
Route::post('/drugUpdate', [DrugsController::class, 'update'])->name('drugUpdate');
Route::put('/drugUpdate/{id}', [DrugsController::class, 'update'])->name('drugUpdate');
Route::delete('/drugDel/{id}', [DrugsController::class, 'destroy'])->name('drugDel');
Route::get('/Drugs/Search', [DrugsController::class, 'find'])->name('drug.find');







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

Route::get('/Drugs', function () {
    return view('pages.drugs');
});

Route::get('/Search', function () {
    return view('pages.search');
});

Auth::routes();

Route::prefix('phm')->name('phm.')->group(function () {

    Route::middleware(['guest:phm', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.phm.login')->name('login');
        Route::view('/register', 'dashboard.phm.register')->name('register');
        Route::post('/create', [PhmController::class, 'create'])->name('create');
        Route::post('/check', [PhmController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:phm', 'PreventBackHistory'])->group(function () {
        Route::get('/home', [PhmController::class, 'index'])->name('home');
        Route::post('/logout', [PhmController::class, 'logout'])->name('logout');
        Route::get('/add-new', [PhmController::class, 'add'])->name('add');
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
        Route::post('/home', [PharmaciesController::class, 'store'])->name('addPH');
        Route::post('/home', [DrugsController::class, 'store'])->name('addDrug');
        Route::post('/home', [LabsController::class, 'store'])->name('lab');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});

Route::prefix('labm')->name('labm.')->group(function () {

    Route::middleware(['guest:labm', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.labm.login')->name('login');
        Route::view('/register', 'dashboard.labm.register')->name('register');
        Route::post('/create', [LabmController::class, 'create'])->name('create');
        Route::post('/check', [LabmController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:labm', 'PreventBackHistory'])->group(function () {
        Route::get('/home', [LabmController::class, 'index'])->name('home');
        Route::post('/logout', [LabmController::class, 'logout'])->name('logout');
    });
});

Route::prefix('doctor')->name('doctor.')->group(function () {

    Route::middleware(['guest:doctor', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.doctor.login')->name('login');
        Route::view('/register', 'dashboard.doctor.register')->name('register');
        Route::post('/create', [DoctorController::class, 'create'])->name('create');
        Route::post('/check', [DoctorController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:doctor', 'PreventBackHistory'])->group(function () {
        Route::get('/home', [DoctorController::class, 'index'])->name('home');
        Route::post('/logout', [DoctorController::class, 'logout'])->name('logout');
    });
});
