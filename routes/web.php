<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('demo');

});

Route::get('/form', function () {
    return view('form');

});

Route::get('/datastudent', function () {
    return view('datastudent');

});

Route::get('/student',
    [StudentController::class, 'index']
);