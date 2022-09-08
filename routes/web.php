<?php

use App\Http\Controllers\BoyController;
use App\Http\Controllers\FatherController;
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



Route::get('/', function () {
    return view('welcome');
});






Route::prefix('cms/admin')->group(function(){

    Route::view('/',' cms.parent');
    Route::view('temp',' cmn.temp');
    Route::resource('fathers', FatherController::class);
    Route::post('fathers_update/{id}' , [FatherController::class , 'update'] );

    // Route::resource('boys', BoyController::class);
    // Route::post('boys_update/{id}' , [BoyController::class , 'update'] );
});
