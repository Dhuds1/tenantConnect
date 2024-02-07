<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardDirect;
use App\Http\Controllers\TicketCenterController;
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

Route::get('/dashboard', [DashboardDirect::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/tickets', [TicketCenterController::class, 'index'])->middleware(['auth', 'verified'])->name('tickets');
Route::get('/tickets-create', [TicketCenterController::class, 'create'])->middleware(['auth', 'verified'])->name('tickets.create');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
