<?php

namespace App\Livewire\Tickets;

use Livewire\Component;

class TicketList extends Component
{
    public $ticket;
    public function mount($ticket)
    {
        $this->ticket = $ticket;
    }
    public function render()
    {
        return view('livewire.tickets.ticket-list');
    }
}
