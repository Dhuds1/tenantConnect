<?php

namespace App\Livewire\Admin;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\Attributes\Session;

class AdTicketViewing extends Component
{
  public $ticket;
  public $priority;
  public $status;
  public function mount($id)
  {
    $this->ticket = Ticket::findOrFail($id);
    $this->status = $this->ticket->status->value;
    $this->priority = $this->ticket->priority->value;
    $this->ticket->last_viewed = now();
    $this->ticket->save();
  }
  public function save()
  {
    $changes = false;
    if ($this->ticket->status !== $this->status) {
      $this->ticket->status = $this->status;
      $changes = true;
    }
    if ($this->ticket->priority !== $this->priority) {
      $this->ticket->priority = $this->priority;
      $changes = true;
    }
    if ($changes) {
      $this->ticket->save();
      request()->session()->flash('success', __('Ticket Updated'));
    } else {
      request()->session()->flash('success', __('No Changes Made'));
    }
  }
  public function render()
  {
    return view('livewire.admin.ad-ticket-viewing');
  }
}
