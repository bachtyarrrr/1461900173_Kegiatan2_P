<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NurmansyahController;
use Illuminate\Support\Facades\DB;

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

Route::get('/home', [NurmansyahController::class, 'home']);
Route::get('/anggota', [NurmansyahController::class, 'anggota']);
Route::get('/like', [NurmansyahController::class, 'like']);