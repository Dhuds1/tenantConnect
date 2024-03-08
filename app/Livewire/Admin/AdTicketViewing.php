<?php

namespace App\Livewire\Admin;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Livewire\Component;

class AdTicketViewing extends Component
{
    public function render($ticket)
    {
        $ticket = Ticket::findOrFail($ticket);
        if($ticket->seen == "unseen"){
            $ticket->seen = "seen";
        }
        $ticket->last_viewed = now();
        $ticket->save();
        return view('livewire.admin.ad-ticket-viewing', [
            'ticket' => $ticket,
        ]);
    }
}
