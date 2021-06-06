<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\adminController;


Route::get('/',[indexController::class ,'index']);
Route::post('/sendcv',[indexController::class ,'send'])->name('sendbutton');



// Login page (admin)
Route::get('/adminlogin',[adminController::class ,'admin']);
Route::post('/adminlogin',[loginController::class ,'login'])->name('login'); //login button


//logOut (admin)
Route::post('/adminlogout',[LoginController::class ,'logout'])->name('adminlogout'); //logout button

// Admin dashboard (view all casters applications)
Route::get('/dashboard',[dashboardController::class , 'index'])->middleware('auth');

// single caster view
Route::get('/view/{id}',[dashboardController::class ,'view'])->middleware('auth');



//Route::get('/', function () {
//   return view('welcome');
//});
