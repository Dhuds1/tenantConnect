<?php

namespace App\Livewire\Tickets;

use App\Models\Ticket;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TicketUpdate extends Component
{
  public $ticket;
  public $title;
  public $details;


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
    $this->details = $this->ticket->details;
    $this->title = $this->ticket->title;
  }

  public function update()
  {
    $changes = false;
    if ($this->ticket->details !== $this->details) {
      $this->ticket->details = $this->details;
      $changes = true;
    }
    if( $this->ticket->title !== $this->title) {
      $this->ticket->title = $this->title;
      $changes = true;
    }
    if ($changes == true) {
      $this->ticket->save();
    } else {
      dd("no changes");
    }
  }

  public function render()
  {
    return view('livewire.tickets.ticket-update');
  }
}
