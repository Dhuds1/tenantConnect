<?php

namespace App\Livewire\Admin;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithPagination;

class AdTicketList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.ad-ticket-list', [
            'tickets' => Ticket::paginate(10),
        ]);
    }
}
