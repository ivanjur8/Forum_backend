<?php
use App\Http\Controllers\Predmeti_studentiController;
use App\Http\Controllers\PredmetiController;
use App\Http\Controllers\StudentiController;
use App\Http\Controllers\TemeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Predmeti_studenti
Route::post('/ps/dodaj', [Predmeti_studentiController::class, 'store']);
Route::post('/ps/uredi/{id}', [Predmeti_studentiController::class, 'edit']);
Route::get('/ps/dohvati', [Predmeti_studentiController::class, 'index']);
Route::get('/ps/izbrisi/{id}', [Predmeti_studentiController::class, 'destroy']);


// Predmeti
Route::post('/pred/dodaj', [PredmetiController::class, 'store']);
Route::post('/pred/uredi/{id}', [PredmetiController::class, 'edit']);
Route::get('/pred/dohvati', [PredmetiController::class, 'index']);
Route::get('/pred/izbrisi/{id}', [PredmetiController::class, 'destroy']);


// Studenti
Route::post('/student/dodaj', [StudentiController::class, 'store']);
Route::post('/student/uredi/{id}', [StudentiController::class, 'edit']);
Route::get('/student/dohvati', [StudentiController::class, 'index']);
Route::get('/student/izbrisi/{id}', [StudentiController::class, 'destroy']);

// Teme
Route::post('/tema/dodaj', [TemeController::class, 'store']);
Route::post('/tema/uredi/{id}', [TemeController::class, 'edit']);
Route::get('/tema/dohvati', [TemeController::class, 'index']);
Route::get('/tema/izbrisi/{id}', [TemeController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
