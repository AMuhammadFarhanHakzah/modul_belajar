<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $active = 'dashboard';
        return view('admin.dashboard', compact('active'));
    }

    public function user() {
        $active = 'user';
        
        $users = User::get();

        return view('admin.user', compact('active', 'users'));
    }
}
