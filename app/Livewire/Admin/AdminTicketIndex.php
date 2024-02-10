<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminTicketIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.ticket-index')->layout('layouts.app');
    }
}
