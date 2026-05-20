<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/inscription', [App\Http\Controllers\InscriptionController::class, 'index']);
Route::post('/inscription', [App\Http\Controllers\InscriptionController::class, 'store']);

require __DIR__.'/auth.php';

Route::post('/buy', function (\Illuminate\Http\Request $request) {
    $quantity = $request->input('entry', 1);
    $method = $request->input('payment_method', 'value');
    return redirect('/inscription?quantity=' . $quantity . '&method=' . $method);
});
Route::get('/buy', function () {
    return view('buy-amount');
});