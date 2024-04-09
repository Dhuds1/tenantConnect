<?php

namespace App\View\Components;

use App\Models\Ticket;
use Livewire\Component;

class TicketView extends Component
{
  public Ticket $ticket;

  public function mount($id)
  {
    $this->ticket = Ticket::findOrFail($id);
    if ($this->ticket->user_id !== auth()->user()->id) {
      return redirect()->route('tickets.index');
    }
  }
  public function render()
  {
    return view('components.ticket-view');
  }
}
