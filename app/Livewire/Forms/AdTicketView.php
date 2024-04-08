<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Ticket;
use Livewire\Attributes\Validate;

class AdTicketView extends Form
{
  public $priority = '';
  public $status = '';

  public function save()
  {
    dd($this);
  }
  public function render($ticket)
  {
    $ticket = Ticket::findOrFail($ticket);
    if ($ticket->seen == "unseen") {
      $ticket->seen = "seen";
    }
    $ticket->last_viewed = now();
    $ticket->save();
    return view('livewire.admin.ad-ticket-viewing', [
      'ticket' => $ticket,
    ]);
  }
}
