<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use Spatie\Permission\Models\Role;

class DashboardDirect extends Controller
{
    public function index(Request $request)
    {
        if($request->user()->hasRole('admin')){
            return redirect()->action([DashboardDirect::class, 'admin']);
        } else {
            return redirect()->action([DashboardDirect::class, 'default']);
        }

    }
    public function default(Request $request): View
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
