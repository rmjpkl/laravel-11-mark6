<?php


use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApelController;
use App\Http\Controllers\HomeController;

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\LogoutPreviousSessions;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\TrollingController;
use App\Http\Controllers\SpreadsheetController;
use App\Http\Controllers\GoogleSheetsController;
use App\Http\Controllers\PelanggaranController;

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

// Route::get('/', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'login')->name('login');
    Route::post('actionlogin', 'actionlogin')->name('actionlogin')->middleware(LogoutPreviousSessions::class);
    Route::get('actionlogout', 'actionlogout')->name('actionlogout')->middleware('auth');
});

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('trolling', [TrollingController::class, 'index'])->name('trolling')->middleware('auth');
Route::resource('/trollings', \App\Http\Controllers\TrollingController::class);


Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('/users', \App\Http\Controllers\UserController::class)->middleware(AdminMiddleware::class);

Route::controller(SpreadsheetController::class)->group(function () {
    Route::get('/spreadsheets/lokasi', 'lokasi')->name('spreadsheets.lokasi');
    Route::get('/spreadsheets/updatepenghuni', 'updatepenghuni')->name('spreadsheets.updatepenghuni');
});

// Route::middleware(['auth'])->group(function () {
//     Route::controller(SpreadsheetController::class)->group(function () {
//         Route::get('/spreadsheets/lokasi', 'lokasi')->name('spreadsheets.lokasi');
//         Route::get('/spreadsheets/updatepenghuni', 'updatepenghuni')->name('spreadsheets.updatepenghuni');
//     });
// });

Route::resource('/points', \App\Http\Controllers\PointController::class);

// Route::get('/points', [PointController::class, 'index'])->name('point');
// Route::get('/pointhome', [PointController::class, 'home'])->name('pointhome');
// Route::post('/points', [PointController::class, 'store'])->name('points.store');

Route::get('/apels', [ApelController::class, 'index'])->name('apel');
Route::post('/apels/store', [ApelController::class, 'store'])->name('apels.store');

Route::controller(ApelController::class)->group(function () {
    Route::get('/apels', 'index')->name('apel');
    Route::get('/kamar', 'kamar')->name('kamar');
    Route::get('/apels/bloka', 'bloka')->name('bloka');
    Route::get('/apels/blokb', 'blokb')->name('blokb');
    Route::get('/apels/blokc', 'blokc')->name('blokc');
    Route::get('/apels/blokd', 'blokd')->name('blokd');
    Route::get('/apels/bloke', 'bloke')->name('bloke');
    Route::get('/apels/blokf', 'blokf')->name('blokf');
});

Route::resource('/pelanggarans', \App\Http\Controllers\PelanggaranController::class);





Route::get('/hash-passwords', function () {

    // Koneksi ke database
    $mysqli = new mysqli("localhost", "root", "", "db_laravel11");
    // Cek koneksi
    if ($mysqli->connect_error) {
        die("Koneksi gagal: " . $mysqli->connect_error);
    }
    // Ambil semua pengguna
    $result = $mysqli->query("SELECT id, password FROM users");

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $hashedPassword = Hash::make($row['password']);
            $mysqli->query("UPDATE users SET password='$hashedPassword' WHERE id=" . $row['id']);
        }
    }
    $mysqli->close();

    echo "Password berhasil di-hash.";

});
