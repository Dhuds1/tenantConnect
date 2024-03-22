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

    public function mount()
    {
        $this->fill([
            'ticket.tenant' => Auth::user()->name,
            'ticket.building' => Auth::user()->building,
            'ticket.unit' => Auth::user()->unit,
            'ticket.email' => Auth::user()->email,
        ]);
    }
    public function storeImage(Request $request)
    {
        $name = $this->image[0]->hashName();
        $path = $this->image[0]->storeAs('ticket-images', $name, 'public');
        Storage::disk('local')->put($path, file_get_contents($this->ticket->images));
    }
    public function save()
    {
        $this->validate();
        $this->ticket->create();
        $this->dispatch('ticket-created');
        $this->ticket->reset();
    }

    public function render()
    {
        return view('livewire.tickets.ticket-form');
    }
}
