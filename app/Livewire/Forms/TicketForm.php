<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Attributes\Rule;
use Livewire\Form;

class TicketForm extends Form
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

    public function create()
    {
        auth()->user()->tickets()->create($this->all());
        request()->session()->flash('success', __('Ticket Submitted Successfully'));
    }
}
