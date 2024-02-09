<?php

namespace App\Livewire\Tickets;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class TicketList extends Component
{
    use WithPagination;

    public function placeholder()
    {
        return view('livewire.loading.skeleton');
    }
    #[On('ticket-created')]
    public function render()
    {
        return view('livewire.tickets.ticket-list', [
            'tickets' => auth()->user()->tickets()->paginate(5),
        ]);
    }
}
