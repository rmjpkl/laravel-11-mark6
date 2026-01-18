<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ApelController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\DatawbpController;
use App\Http\Controllers\TrollingController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\SpreadsheetController;
use App\Http\Middleware\LogoutPreviousSessions;
use App\Http\Controllers\PenggeledahanController;
use App\Http\Controllers\HpController;

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

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'login')->name('login');
    Route::post('actionlogin', 'actionlogin')->name('actionlogin')->middleware(LogoutPreviousSessions::class);
    Route::get('actionlogout', 'actionlogout')->name('actionlogout')->middleware('auth');
});

Route::get('/generate-pdf/{id}', [PdfController::class, 'generateAndMergePdf']);


Route::middleware('auth')->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('trolling', [TrollingController::class, 'index'])->name('trolling');
    Route::resource('/trollings', TrollingController::class);
    Route::resource('/products', \App\Http\Controllers\ProductController::class);
    Route::resource('/users', \App\Http\Controllers\UserController::class)->middleware(AdminMiddleware::class);

    Route::controller(SpreadsheetController::class)->group(function () {
        Route::get('/spreadsheets/lokasi', 'lokasi')->name('spreadsheets.lokasi');
        Route::get('/spreadsheets/updatepenghuni', 'updatepenghuni')->name('spreadsheets.updatepenghuni');
    });

    Route::resource('/points', PointController::class);


    Route::controller(ApelController::class)->group(function () {
        Route::get('/apels', 'index')->name('apel');
        Route::post('/apels/store', 'store')->name('apels.store');
        Route::get('/kamar', 'kamar')->name('kamar');
        Route::get('/apels/bloka', 'bloka')->name('bloka');
        Route::get('/apels/blokb', 'blokb')->name('blokb');
        Route::get('/apels/blokc', 'blokc')->name('blokc');
        Route::get('/apels/blokd', 'blokd')->name('blokd');
        Route::get('/apels/bloke', 'bloke')->name('bloke');
        Route::get('/apels/blokf', 'blokf')->name('blokf');
    });

    Route::resource('/pelanggarans', PelanggaranController::class);

    Route::resource('/penggeledahans', PenggeledahanController::class);
    Route::get('/penggeledahans/{id}/export-pdf', [PenggeledahanController::class, 'exportPdf'])->name('penggeledahans.exportPdf');
    Route::get('/penggeledahans/{id}/preview-pdf', [PenggeledahanController::class, 'previewPdf'])->name('penggeledahans.previewPdf');


    Route::get('/datawbps', [DatawbpController::class, 'index'])->name('datawbps.index');
    Route::get('/datawbps/create', [DatawbpController::class, 'create'])->name('datawbps.create');
    Route::post('/datawbps/import', [DatawbpController::class, 'import'])->name('datawbps.import');
    Route::get('/datawbps/updateDariSpreadsheet', [DatawbpController::class, 'updateDariSpreadsheet'])->name('datawbps.updateDariSpreadsheet');




    Route::get('/hp', [HpController::class, 'index'])->name('hp.index');
    Route::get('/hp/create', [HpController::class, 'create'])->name('hp.create');
    Route::post('/hp/import', [HpController::class, 'import'])->name('hp.import');
    Route::get('/hp/updateDariSpreadsheet', [HpController::class, 'updateDariSpreadsheet'])->name('hp.updateDariSpreadsheet');


    Route::resource('/disposisis', DisposisiController::class);
});

Route::get('/hash-passwords', function () {
    // Koneksi ke database
    $mysqli = new mysqli("localhost", "root", "", "kplm9434_db_laravel11");
    // Cek koneksi
    if ($mysqli->connect_error) {
        die("Koneksi gagal: " . $mysqli->connect_error);
    }
    // Ambil semua pengguna
    $result = $mysqli->query("SELECT id, password FROM users");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $hashedPassword = Hash::make($row['password']);
            $mysqli->query("UPDATE users SET password='$hashedPassword' WHERE id=" . $row['id']);
        }
    }
    $mysqli->close();

    echo "Password berhasil di-hash.";
});
