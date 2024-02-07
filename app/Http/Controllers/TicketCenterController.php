<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TicketCenterController extends Controller
{
    public function index(Request $request)
    {
      return view('tickets/ticket', [
        'user' => $request->user(),
    ]);
    }
}