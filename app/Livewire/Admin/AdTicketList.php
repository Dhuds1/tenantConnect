<?php

namespace App\Livewire\Admin;

use App\Models\Ticket;
use Livewire\Component;

class AdTicketList extends Component
{
    public function render()
    {
        return view('livewire.admin.ad-ticket-list', [
            'tickets' => Ticket::all()
        ]);
    }
}
