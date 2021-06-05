<?php
use App\Http\Controllers\KamarController0262;
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

Route::resource('kamar0262', KamarController0262::class);

Route::resource('kamarTambah0262', KamarController0262::class);

Route::resource('kamarEdit0262', KamarController0262::class);