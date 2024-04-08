<?php

namespace App\Livewire\Tickets;

use Livewire\Component;

class TicketImages extends Component
{
    public $images;
    public $image;

    public function mount($images)
    {
        $this->images = $images;
    }

    public function delete($image) {
        dd('Form Submitted!', $image); // For debugging
        // You can perform your delete operation here
    }

    public function render()
    {
        return view('livewire.tickets.ticket-images');
    }
}
