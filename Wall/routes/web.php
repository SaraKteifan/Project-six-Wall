<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WallProject;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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



Route::view("show","register");
Route::get('/', [WallProject::class, 'home']);
Route::get('/home/id/{id?}', [WallProject::class, 'showHomePage']); 
Route::get('logout', [WallProject::class, 'logout'])->name('logout');
Route::get('/navbar',[WallProject::class,'showNavbar']);
Route::get('/',[WallProject::class,'showHomePageGuest']);
Route::get('/footer',[WallProject::class,'showFooter']);
Route::get('/single-service/id/{id}',[WallProject::class,'singleService']);
Route::get('/about-us',[WallProject::class,'showAboutUs']);





Route::get('/info/{id}',[WallProject::class, 'showing']);
Route::get('/update-info/id/{id}',[WallProject::class,'updateInfo']);
Route::put('/update/id/{id}',[WallProject::class,'update_i']);

Route::get('/add',[WallProject::class,'addvol']);
Route::put('/added',[WallProject::class,'saveInfo']);




Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/contact-us', [WallProject::class, 'contact']);
Route::post('/contact-us-info', [WallProject::class, 'contactInfo']);
Route::get('/reservation/id/', [AuthController::class, 'index']);
Route::get('/reservation/id/{id}', [AdminController::class, 'reservations']);
Route::post('/bringReservation/id/{id}', [AdminController::class, 'bringReservations']);


// Admin
Route::get('/AdminDashboard',  [AdminController::class, 'viewDashboard']);
Route::get('/AdminUsers',  [AdminController::class, 'viewUsers']);
Route::get('/AdminServices', [AdminController::class, 'viewServices']);
Route::get('/AdminReservations', [AdminController::class, 'viewReservations']);
Route::get('/AdminAddSer', [AdminController::class, 'addServicePage']);
Route::post('/AdminAddService', [AdminController::class, 'addService']);
Route::get('/AdminEditSer/{id}', [AdminController::class, 'editServicePage']);
Route::post('/AdminEditService/{id}', [AdminController::class, 'editService']);
Route::get('/AdminDeleteSer/{id}', [AdminController::class, 'deleteService']);
Route::get('/AdminEditUserPage/{id}', [AdminController::class, 'editUserPage']);
Route::post('/AdminEditUser/{id}', [AdminController::class, 'editUser']);
Route::get('/AdminDeleteUser/{id}', [AdminController::class, 'deleteUser']);
Route::get('/chart', [AdminController::class, 'barChart']);
Route::get('/AdminLogin', [AdminController::class, 'viewLogin']);
Route::post('/AdminLoginCheck', [AdminController::class, 'Login']);
Route::get('/AdminContacts', [AdminController::class, 'showContacts']);
Route::get('/AdminViewCon/{id}', [AdminController::class, 'showMessage']);
Route::get('/AdminVolunteers', [AdminController::class, 'showVolunteers']);
