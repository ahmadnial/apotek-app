<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\mstrController;

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
})->name('index');

Route::post('/postLogin', [loginController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/addSup', [mstrController::class, 'addSup'])->name('addSup');
Route::post('/addSat', [mstrController::class, 'addSat'])->name('addSat');
Route::post('/addRak', [mstrController::class, 'addRak'])->name('addRak');
Route::post('/addMerk', [mstrController::class, 'addMerk'])->name('addMerk');
Route::post('/addgolProduk', [mstrController::class, 'addgolProduk'])->name('addgolProduk');


Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {

    Route::get('/home', [homeController::class, 'index']);
    Route::get('/supplier', [homeController::class, 'supplier']);
    Route::get('/satuan', [homeController::class, 'satuan']);
    Route::get('/barang', [homeController::class, 'barang']);
    Route::get('/rak', [homeController::class, 'rak']);
    Route::get('/merk', [homeController::class, 'merk']);
    Route::get('/golonganProduk', [homeController::class, 'golonganProduk']);
    Route::get('/penjualan', [homeController::class, 'penjualan']);
    Route::get('/orderPembelian', [homeController::class, 'orderPembelian']);
    // Route::get('', [homeController::class, '']);
    // Route::get('', [homeController::class, '']);
});

Route::group(['middleware' => ['auth', 'ceklevel:user,admin']], function () {

    // Route::get('/home', [HomeController::class, 'index']);
    // Route::get('/scanqr', [HomeController::class, 'scanqr']);
});
