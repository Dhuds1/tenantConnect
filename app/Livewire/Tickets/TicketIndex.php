<?php

namespace App\Livewire\Tickets;


use App\Livewire\Forms\TicketCreate;
use Livewire\Component;

class TicketIndex extends Component
{
    public function render()
    {
        return view('livewire.tickets.ticket-index');
    }
}

