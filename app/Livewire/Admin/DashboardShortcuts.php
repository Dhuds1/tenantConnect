<?php

namespace App\Livewire\Admin;

use App\Models\Ticket;
use Livewire\Component;

class DashboardShortcuts extends Component
{
    public $tickets;
    public $new;
    // $tickets is the value retrieved from ad-dashboard
    public function mount($tickets, $new)
    {
        $this->tickets = $tickets;
        $this->new = $new;
    }
    public function render()
    {
        return view('livewire.admin.dashboard-shortcuts');
    }
}
