<?php

namespace App\Livewire\Tickets;

use App\Models\Ticket;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use App\Livewire\TicketCreate;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TicketUpdate extends Component
{
  use WithFileUploads;

  public $ticket;
  public $tenant;
  public $building;
  public $unit;
  public $email;
  public $topic;
  public $priority;
  public $title;
  public $details;
  public $images;

  public function mount($id)
  {
    try {
      $this->ticket = Ticket::findOrFail($id);
      if ($this->ticket->user_id !== auth()->user()->id) {
        return redirect()->route('tickets.index');
      }
    } catch (ModelNotFoundException $e) {
      Session::flash('message', 'Ticket not found!');
      Session::flash('alert-type', 'error');
      return redirect()->route('tickets.index');
    }
  }

  public function update()
  {
    dd($this);
  }

  public function render()
  {
    return view('livewire.tickets.ticket-update');
  }
}
