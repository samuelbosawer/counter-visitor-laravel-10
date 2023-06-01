<?php
use App\Http\Controllers\PostController;
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

Route::controller(PostController::class)->group(function(){

    // MAIN PAGE
    Route::get('/','index')->name('visitor.home');
    Route::get('/counter-visitor/{id}/show','show')->name('counter.visitor');

});
