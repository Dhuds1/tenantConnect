<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Images;
use App\Models\Ticket;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class TicketCreate extends Form
{
    // Livewire ticket form
    #[Rule('required')]
    public $tenant;
    #[Rule('required')]
    public $building;
    #[Rule('required')]
    public $unit;
    #[Rule('required')]
    public $email;
    #[Rule('required')]
    public $topic;
    #[Rule('required')]
    public $priority;
    #[Rule('required')]
    public $title;
    #[Rule('required')]
    public $details;

    public $images;
    public function create()
    {
        auth()->user()->tickets()->create($this->all());
        request()->session()->flash('success', __('Ticket Submitted Successfully'));
    }
}
