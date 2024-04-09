<?php

use App\Livewire\Admin\AdDashboard;
use App\View\Components\TicketView;
use App\Livewire\Admin\AdTicketIndex;
use App\Livewire\Tickets\TicketIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\Tickets\TicketUpdate;
use App\Livewire\Admin\AdTicketViewing;
use App\Http\Controllers\DashboardDirect;
use App\Http\Controllers\ProfileController;

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


Route::get('/dashboard', [DashboardDirect::class, 'index'])->middleware('auth')->name('dashboard');
// Admin Middleware
Route::group(['middleware' => 'role:admin'], function () {
  Route::get('/admin/dashboard', AdDashboard::class)->name('admin.index');
  Route::get('/admin/ticket-center', AdTicketIndex::class)->name('ad.ticket.index');
  Route::get('/admin/ticket-center/{id}', AdTicketViewing::class)->name('ad.ticket.viewing');
});

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

  Route::get('/tickets', TicketIndex::class)->name('tickets.index');
  Route::get('/ticket/view/{id}', TicketView::class)->name('tickets.view');
  Route::get('/tickets/update/{id}', TicketUpdate::class)->name('tickets.update');
});

require __DIR__ . '/auth.php';
