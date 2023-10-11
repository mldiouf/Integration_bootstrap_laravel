<?php

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

Route::get('/', function () {return view('layouts.index');})->name('index');
Route::get('/modals', function () {return view('layouts.modals');})->name('modals');
Route::get('/alerts', function () {return view('layouts.alerts');})->name('alerts');
Route::get('/blank', function () {return view('layouts.blank');})->name('blank');
Route::get('/buttons', function () {return view('layouts.buttons');})->name('buttons');
Route::get('/charts', function () {return view('layouts.charts');})->name('charts');
Route::get('/copycontent', function () {return view('layouts.copycontent');})->name('copycontent');
Route::get('/datatables', function () {return view('layouts.datatables');})->name('datatables');
Route::get('/dropdowns', function () {return view('layouts.dropdowns');})->name('dropdowns');
Route::get('/form_advanceds', function () {return view('layouts.form_advanceds');})->name('form_advanceds');
Route::get('/form_basics', function () {return view('layouts.form_basics');})->name('form_basics');
Route::get('/login', function () {return view('layouts.login');})->name('login');
Route::get('/register', function () {return view('layouts.register');})->name('register');
Route::get('/popovers', function () {return view('layouts.popovers');})->name('popovers');
Route::get('/progress-bar', function () {return view('layouts.progress-bar');})->name('progress-bar');
Route::get('/simple-tables', function () {return view('layouts.simple-tables');})->name('simple-tables');
Route::get('/ui-colors', function () {return view('layouts.ui-colors');})->name('ui-colors');
Route::get('/404', function () {return view('layouts.404');})->name('404');