<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\expressloanmemberController;

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
    return view('layout');
});
Route::get('/expressloanform', function(){
    return view('expressloanform');
});
Route::get('/debitrequestform', function(){
    return view('debitrequestform');
});
Route::get('/expressloan', function(){
    return view('expressloan');
});

Route::view('/','expressloanform');
Route::post('expressloanform',[expressloanmemberController::class,'addexpressloan']);