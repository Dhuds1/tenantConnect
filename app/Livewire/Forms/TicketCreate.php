<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Images;  // Remove if not used for image storage
use App\Models\Ticket;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;  // Import the trait

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

    public $images; // Property to store uploaded image
    public function create()
    {
        auth()->user()->tickets()->create($this->all());
        request()->session()->flash('success', __('Ticket Submitted Successfully'));
    }
}
