<?php

namespace App\Livewire\Tickets;

use App\Livewire\Forms\TicketCreate;
use Livewire\Component;

class TicketForm extends Component
{
    public TicketCreate $ticket;
    public function save()
    {
        $this->validate();
        $this->ticket->create();
        $this->ticket->reset();
    }
    public function render()
    {
        return view('livewire.tickets.ticket-form');
    }
}
