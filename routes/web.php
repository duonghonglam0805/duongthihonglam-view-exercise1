<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PagesController;
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
    return view('welcome');
});
Route::get('/form', [FormController::class, 'getForm']);
Route::get('/test', function(){
    return view('test', ['name'=>'Dương Thị Hồng Lam']);
});
Route::get('/about-me',[PagesController::class, 'aboutMe']);