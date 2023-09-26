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

require __DIR__.'/auth.php';


//Gestion User
Route::get('listeUser', [UserController::class, 'index'])->name('user.liste');
Route::get('listeUser/detailUser{id}', [UserController::class, 'show'])->name('user.detail');
Route::get('listeUser/bloquerUser{id}', [UserController::class, 'bloquer'])->name('user.bloquer');
Route::get('listeUser/debloquerUser{id}', [UserController::class, 'debloquer'])->name('user.debloquer');
// Route::get('listeUser/edit{id}', [UserController::class, 'edit'])->name('user.edit');
// Route::post('listeUser/updateUser{id}', [UserController::class, 'update'])->name('user.update');
Route::get('listeUser/deleteUser{id}', [UserController::class, 'destroy'])->name('user.delete');


//Gestion Moutons
Route::get('listeMouton', [MoutonController::class, 'index'])->name('mouton.liste');
Route::get('listeMouton/create', [MoutonController::class, 'create'])->name('mouton.create');
Route::post('listeMouton/store', [MoutonController::class, 'store'])->name('mouton.store');
Route::get('listeMouton/detail{id}', [MoutonController::class, 'show'])->name('mouton.detail');
Route::get('listeMouton/delete{id}', [MoutonController::class, 'destroy'])->name('mouton.delete');
Route::get('listeMouton/updateMouton{id}', [MoutonController::class, 'edit'])->name('mouton.edit');
Route::put('listeMouton/updateMouton{id}', [MoutonController::class, 'update'])->name('mouton.update');