<?php

use Illuminate\Routing\Controller;
use App\Http\Controllers\kuesioner2;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerLaporan;
use App\Filament\Resources\KuesionerResource;
use vendor\filament\filament\src\Pages\Auth\Login;
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
    return view('dashboard');
});

Route::get('/penilaian', function () {
    return view('penilaian');
});
 
Route::get('/driver', function () {   
    return view('driver');
 });

 Route::get('/adm', function () {   
    return view('cleaning');
 });

 Route::get('/cleaning', function () {   
    return view('adm');
 });



 Route::get('vendor/filament/filament/src/Pages/Auth/Login.php', function () {
    return view('login');
 });       




Route::get('/laporan/input',[ControllerLaporan::class,'input'])->name('');
Route::post('add',[ControllerLaporan::class,'add']);
