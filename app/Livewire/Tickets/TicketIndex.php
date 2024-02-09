<?php

namespace App\Livewire\Tickets;


use App\Livewire\Forms\TicketForm;
use Livewire\Component;

class TicketIndex extends Component
{
    public TicketForm $ticket;
    public function render()
    {
        return view('livewire.tickets.ticket-index')->layout('layouts.app');
    }

    public function save()
    {
        $this->validate();
        $this->ticket->create();
        $this->ticket->reset();
    }
}
