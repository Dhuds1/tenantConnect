<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TicketController extends Controller
{
    public function index()
    {
        return view('tickets/ticket',[
            'tickets' => Ticket::orderBy('created_at', 'DESC')->get()
        ]);
    }
    public function create(Request $request)
    {
        return view('tickets/create');
    }
    public function store(Request $request): RedirectResponse
        {
        $request->validate([
            'tenant' => ['required', 'string', 'max:255'],
            'building' => ['required', 'string', 'max:255'],
            'unit' => ['required', 'string', 'max:255'],
            'email' => ['required', 'lowercase', 'string', 'max:255'],
            'topic' => ['required', 'string', 'max:255'],
            'priority' => ['required', 'string', 'max:255'],
            'details' => ['required', 'string', 'max:255'],
        ]);
        $ticket = new Ticket([
            'tenant' => $request->tenant,
            'building' =>  $request->building,
            'unit' => $request->unit,
            'email' =>  $request->email,
            'topic' => $request->topic,
            'priority' => $request->priority,
            'details' =>  $request->details,
        ]);
        $ticket->save();

        return redirect(RouteServiceProvider::TICKET);
    }
}
