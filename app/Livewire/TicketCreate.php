<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\TicketForm;
use LivewireUI\Modal\ModalComponent;
class TicketCreate extends ModalComponent
{
    public TicketCreate $ticket;
    public function render()
    {
        return view('livewire.ticket-create');
    }

    public function store()
    {
        $this->ticket->validate();
    }
}
