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
    public $image;

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
            'ticket.image' => 'nullable|image', // Optional validation for image
        ]);
        // Handle image upload (if applicable)
        if ($this->image) {
            if ($this->image) {
                $paths = []; // Array to store image paths
                foreach ($this->image as $image) {
                    $path = $image->store('ticket-images', 'public');
                    $paths[] = $path; // Add each image path to the array
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
