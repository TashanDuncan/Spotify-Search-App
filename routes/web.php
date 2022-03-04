<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SpotifySearchController;

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
    return view('index');
});


Route::get("bytrackname", function() {
    return view('bytrackname');
});

Route::get("byartist", function() {
    return view('byartist');
});

Route::post('search-results', [SpotifySearchController::class,"search"]);
Route::post('search', [SpotifySearchController::class,"query"]);