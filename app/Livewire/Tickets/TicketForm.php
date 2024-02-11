<?php

namespace App\Livewire\Tickets;

use App\Livewire\Forms\TicketCreate;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class TicketForm extends ModalComponent
{
  public TicketCreate $ticket;
  public $tenant;

  public function mount()
  {
    $this->fill([
      'ticket.tenant' => Auth::user()->name,
      'ticket.building' => Auth::user()->building,
      'ticket.unit' => Auth::user()->unit,
      'ticket.email' => Auth::user()->email,
    ]);
  }

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
