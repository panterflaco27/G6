<?php

use App\Http\Controllers\UsersController;
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
    return view('index');
});

Route::get('/diagnostico', function(){
    return view('/formulario/form');
});

Route::get('/log', function(){
    return view('principal');
});

Route::get('/reg', function(){
    return view('principal');
});

Route::get('/login', function(){
    return view('/sisweb/login');
});

Route::resource('users', UsersController::class);