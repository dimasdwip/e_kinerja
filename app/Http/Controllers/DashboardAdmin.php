<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdmin extends Controller
{
    public function showDashboardpage()
    {
        return view('layouts.dashboard');
    }
}
