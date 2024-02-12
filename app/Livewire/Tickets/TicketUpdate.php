<?php

namespace App\Livewire\Tickets;

use App\Models\Ticket;
use Livewire\Component;
use App\Livewire\TicketCreate;
use Illuminate\Support\Facades\Response;

class TicketUpdate extends Component
{
    public TicketCreate $ticket;

    public function update()
    {
      dd($this->validate());
    }

    public function render($id)
    {
        $ticket = Ticket::findOrFail($id)->user_id;
        if ($ticket == auth()->user()->id){
            return view('livewire.tickets.ticket-update');
        } else {
            return redirect('tickets');
        }
    }
}
