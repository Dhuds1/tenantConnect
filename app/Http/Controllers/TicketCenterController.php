<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TicketCenterController extends Controller
{
    public function index(Request $request)
    {
      return view('tickets/ticket', [
        'user' => $request->user(),
    ]);
    }

    public function create(Request $request)
    {
      return view ('tickets/create',[
        'user' => $request->user(),
      ]);
    }
    public function submit_ticket()
    {
      return view('tickets/create');
    }
    public function submit(Request $request): RedirectResponse
    {
      $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'building' => ['required', 'string', 'max:255'],
        'unit' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'],
        'topic' => ['reqired', 'string', 'max:255'],
        'priority' => ['reqired', 'string', 'max:255'],
        'details' => ['reqired', 'text'],
      ]);
      $ticket = Tickets::submit_ticket([
        'name' => $request->name,
        'building' => $request->building,
        'unit' => $request->unit,
        'email' => $request->email,
        'topic' => $request->topic,
        'priority' => $request->priority,
        'detail' => $request->detail,
      ]);
      return redirect(RouteServiceProvider::TICKET);
    }
}