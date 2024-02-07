<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        return view('tickets/ticket');
    }
    public function create_ticket(){
        
        // $ticket = new Ticket([
        //     'tenant' => "Ev",
        //     'building' => "Sheperd",
        //     'unit' => "57",
        //     'email' => "evelynn@gmail.com",
        //     'subject' => "Building",
        //     'priority' => "Low",
        //     'details' => "Hello",
        // ]);
        // $ticket->save();
        return view('tickets/ticket', [
            'tickets' => Ticket::all()
        ]);
    }
}
