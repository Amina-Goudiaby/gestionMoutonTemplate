<?php

use App\Http\Controllers\MoutonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'statusProfil'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//Gestion User
Route::get('listeUser', [UserController::class, 'index'])->name('user.liste')->middleware(['auth', 'adminRole']);
Route::get('listeUser/detailUser{id}', [UserController::class, 'show'])->middleware(['auth', 'adminRole'])->name('user.detail');
Route::get('listeUser/bloquerUser{id}', [UserController::class, 'bloquer'])->name('user.bloquer')->middleware(['auth', 'adminRole']);
Route::get('listeUser/debloquerUser{id}', [UserController::class, 'debloquer'])->name('user.debloquer')->middleware(['auth', 'adminRole']);
// Route::get('listeUser/edit{id}', [UserController::class, 'edit'])->name('user.edit');
// Route::post('listeUser/updateUser{id}', [UserController::class, 'update'])->name('user.update');
Route::get('listeUser/deleteUser{id}', [UserController::class, 'destroy'])->name('user.delete')->middleware(['auth', 'adminRole']);


//Gestion Moutons
Route::get('listeMouton', [MoutonController::class, 'index'])->name('mouton.liste')->middleware(['clientRole']);
Route::get('listeMoutonParEleveur', [MoutonController::class, 'listeMoutonParEleveur'])->middleware(['auth', 'eleveurRole'])->name('mouton.listeMoutonParEleveur');
Route::get('listeMouton/create', [MoutonController::class, 'create'])->name('mouton.create')->middleware(['auth', 'eleveurRole']);
Route::post('listeMouton/store', [MoutonController::class, 'store'])->name('mouton.store')->middleware(['auth', 'eleveurRole']);
Route::get('listeMouton/detail{id}', [MoutonController::class, 'show'])->name('mouton.detail');
Route::get('listeMouton/delete{id}', [MoutonController::class, 'destroy'])->name('mouton.delete')->middleware(['auth', 'eleveurRole']);
Route::get('listeMouton/updateMouton{id}', [MoutonController::class, 'edit'])->name('mouton.edit')->middleware(['auth', 'eleveurRole']);
Route::put('listeMouton/updateMouton{id}', [MoutonController::class, 'update'])->name('mouton.update')->middleware(['auth', 'eleveurRole']);