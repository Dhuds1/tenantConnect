<?php

namespace App\Livewire\Tickets;

use App\Livewire\Forms\TicketCreate;
use LivewireUI\Modal\ModalComponent;

class TicketForm extends ModalComponent
{
    public TicketCreate $ticket;
    public function save()
    {
        $this->validate();
        $this->ticket->create();
        $this->dispatch('ticket-created');
        $this->ticket->reset();
    }
    public function render()
    {
        return view('livewire.tickets.ticket-form');
    }
}
