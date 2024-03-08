<?php

namespace App\Livewire\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Symfony\Component\HttpFoundation\Request;

class AdDashboard extends Component
{
    public $urgent;
    public $new;
    public $pending;
    public $unresolved;

    public function mount(Ticket $ticket)
    {
        $this->urgent = $ticket::where('priority', 'urgent')->get();
        $this->new = $ticket::where('seen','unseen')->get();
        $this->pending = $ticket::where('status', '!=','resolved')->get(); $this->unresolved = $ticket::where('status','!=' ,'resolved')->where('last_viewed', '<=', now()->subDays(7))->get();
    }
    public function render()
    {
        return view('livewire.admin.ad-dashboard');
    }
}
