<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\softDeletes;

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
    return view('Admin.dashboard');
});
Route::get('/AdminDashboard', function () {
    return view('Admin.dashboard');
});
Route::get('/AdminProfile', function () {
    return view('Admin.profile');
});
Route::get('/Admin-map-google', function () {
    return view('Admin.map-google');
});
Route::get('/fontawesome', function () {
    return view('Admin.fontawesome');
});
Route::get('/AdminUsers', function () {
    return view('Admin.users');
});
Route::get('/AdminServices', function () {
    return view('Admin.services');
});
Route::get('/AdminReservations', function () {
    return view('Admin.reservations');
});
Route::get('/AdminBlank', function () {
    return view('Admin.blank');
});

Route::get('/AdminDashboard',  [AdminController::class, 'viewDashboard']);
Route::get('/AdminUsers',  [AdminController::class, 'viewUsers']);
Route::get('/AdminServices', [AdminController::class, 'viewServices']);
Route::get('/AdminReservations', [AdminController::class, 'viewReservations']);
Route::get('/AdminAddSer', [AdminController::class, 'addServicePage']);
Route::post('/AdminAddService', [AdminController::class, 'addService']);
Route::get('/AdminEditSer/{id}', [AdminController::class, 'editServicePage']);
Route::post('/AdminEditService/{id}', [AdminController::class, 'editService']);
Route::get('/AdminDeleteSer/{id}', [AdminController::class, 'deleteService']);