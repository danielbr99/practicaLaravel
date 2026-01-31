<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;



Route::view('/', 'main')->name('main');
Route::view('/about', 'about')->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::resource('students', StudentController::class);
});

Route::post('/language', function (Request $request) {
    $request->validate([
        'locale' => ['required', 'in:es,en,fr'],
    ]);

    session(['locale' => $request->locale]);

    return redirect()->back();
})->name('language.set');

require __DIR__.'/auth.php';
