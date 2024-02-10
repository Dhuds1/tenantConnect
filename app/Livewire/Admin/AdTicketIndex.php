<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdTicketIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.ad-ticket-index')->layout('layouts.app');
    }
}
