<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TicketController extends Controller
{
    public function index()
    {
        return view('tickets/ticket');
    }
    public function create()
    {
        return view('tickets/create');
    }
    public function store(User $user)
        {
        $data = request()->validate([
            'tenant' => ['required', 'string', 'max:255'],
            'building' => ['required', 'string', 'max:255'],
            'unit' => ['required', 'string', 'max:255'],
            'email' => ['required', 'lowercase', 'string', 'max:255'],
            'topic' => ['required', 'string', 'max:255'],
            'priority' => ['required', 'string', 'max:255'],
            'details' => ['required', 'string', 'max:255'],
        ]);
        auth()->user()->ticket()->create($data);
        return redirect(RouteServiceProvider::TICKET);
    }
}
