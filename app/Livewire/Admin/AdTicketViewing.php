<?php

namespace App\Livewire\Admin;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Livewire\Component;

class AdTicketViewing extends Component
{
    public function render($ticket)
    {
        return view('livewire.admin.ad-ticket-viewing', [
            'ticket' => Ticket::findOrFail($ticket)
        ]);
    }
}
