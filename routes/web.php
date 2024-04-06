<?php

use App\Livewire\Admin\AdTicketIndex;
use App\Livewire\Tickets\TicketIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\Tickets\TicketUpdate;
use App\Livewire\Admin\AdTicketViewing;
use App\Http\Controllers\DashboardDirect;
use App\Http\Controllers\ProfileController;
use App\Livewire\Admin\AdDashboard;

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


Route::group(['middleware' => 'role:tenant'], function (){
    Route::get('/dashboard', [DashboardDirect::class, 'index'])->name('dashboard');
});
// Admin Middleware
Route::group(['middleware' => 'role:admin'], function(){
    Route::get('/dashboard', AdDashboard::class)->name('admin.index');
    Route::get('/ticket-center', AdTicketIndex::class)->name('ad.ticket.index');
    Route::get('/ticket-center/ticket-id/{id}', [AdTicketViewing::class,'render'])->name('ad.ticket.viewing');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/tickets', TicketIndex::class)->name('tickets.index');
    Route::get('/tickets/update/{id}', [TicketUpdate::class, 'render'])->name('tickets.update');
});

require __DIR__.'/auth.php';
