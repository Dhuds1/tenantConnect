<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DashboardDirect extends Controller
{
    public function index(Request $request): View
    {
        return view('dashboard', [
            'user' => $request->user(),
        ]);
    }
    public function admin(Request $request): View
    {
        return view('admin.index', [
            'user' => $request->user(),
        ]);
    }
}
