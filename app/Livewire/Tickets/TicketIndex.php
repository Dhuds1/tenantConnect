<?php

namespace App\Livewire\Tickets;

use Livewire\Component;

class TicketIndex extends Component
{
    public $tenant;
    public $building;
    public $unit;
    public $email;
    public $topic;
    public $priority;
    public $title;
    public $details;
    public function render()
    {
        return view('livewire.tickets.ticket-index')->layout('layouts.app');
    }

    public function save()
    {
        auth()->user()->tickets()->create($this->only([
            'tenant', 'building', 'unit', 'email', 'topic', 'priority', 'title', 'details'
        ]));
    }
}
