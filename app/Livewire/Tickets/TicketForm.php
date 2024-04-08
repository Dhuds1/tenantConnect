<?php

namespace App\Livewire\Tickets;

use Livewire\WithFileUploads;
use App\Livewire\Forms\TicketCreate;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Request;

class TicketForm extends ModalComponent
{
    public TicketCreate $ticket;
    use WithFileUploads;

    public $tenant;
    public $images;

    public function save()
    {
        $this->validate([
            'ticket.tenant' => 'required',
            'ticket.building' => 'required',
            'ticket.unit' => 'required',
            'ticket.email' => 'required|email',
            'ticket.topic' => 'required',
            'ticket.priority' => 'required',
            'ticket.title' => 'required',
            'ticket.details' => 'required',
            'ticket.images' => 'nullable|mimes:jpeg,png,jpg',
        ]);
        // Handle image upload (if applicable)
        if ($this->images) {
            if ($this->images) {
                $paths = [];
                foreach ($this->images as $image) {
                    $path = $image->store('ticket-images', 'public');
                    $paths[] = $path;
                }
                $this->ticket->images = $paths; // Update ticket data with array of paths
            }
        }

        $this->ticket->create();
        $this->dispatch('ticket-created');
        $this->ticket->reset();
    }

    public function render()
    {
        return view('livewire.tickets.ticket-form');
    }
}
