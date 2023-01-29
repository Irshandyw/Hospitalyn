<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/facility', [FasilitasController::class, 'index']);
Route::get('/medicine', [MedicineController::class, 'index']);
Route::get('/medicine/{id}', [MedicineController::class, 'details']);
Route::get('/article', [ArticleController::class, 'index']);
Route::get('/article/{id}', [ArticleController::class, 'details']);
Route::get('/create/medicine', [MedicineController::class, 'createview']);
Route::post('/create/medicine', [MedicineController::class, 'create'])->name("createMedicine");
Route::get('/searchmedicine', [MedicineController::class, 'search'])->name('searchmedicine');

Route::get('/doctor', [DoctorController::class, 'index']);
Route::get('/doctor/{id}', [DoctorController::class, 'details']);
Route::get('/searchdoctor', [DoctorController::class, 'search'])->name('searchdoctor');

// CRUD
Route::get('/TambahDokter', [DoctorController::class, 'addForm']);
Route::post('insert', [DoctorController::class, 'insert'])->name('insert');
Route::get('/delete/{id}', [DoctorController::class, 'delete'])->name('delete');
Route::get('/UbahDokter/{id}', [DoctorController::class, 'editForm'])->name('ubah_dokter');
Route::put('/update/{id}', [DoctorController::class, 'update'])->name('update_dokter');




// login,register

Route::get('/register', [RegisterController::class, 'main'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'create']);

Route::get('/login', [LoginController::class, 'main'])->name('login');
Route::post('/login', [LoginController::class, 'login_auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/profile/{user:id}', [ProfileController::class, 'index']);
