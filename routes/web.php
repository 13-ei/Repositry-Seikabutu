<?php

use App\Http\Controllers\ContinentController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProfileController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [ContinentController::class, 'index']);
    Route::get('/logs/continent/{continent}', [ContinentController::class, 'show'])->name('continents.show');

    Route::get('/countries/continent/{continent_id}', [CountryController::class, 'getByContinent']);
    Route::get('/logs/search', [CountryController::class, 'searchForm']);
    Route::get('/logs/search/results', [CountryController::class, 'search'])->name('logs.search');
    Route::post('/logs', [LogController::class, 'store']);
    Route::get('/logs/{log}', [LogController::class, 'show']);
    Route::get('logs/{log}/edit', [LogController::class, 'edit']);
    Route::put('/logs/{log}', [LogController::class, 'update']);
    Route::get('/logs/continent/{continent_id}', [LogController::class, 'continentList']);
    Route::post('/logs/upload-image', [LogController::class, 'uploadImageToDropbox'])->name('logs.uploadImage');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
