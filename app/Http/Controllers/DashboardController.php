<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $subscriptions = 6345921;
        $earnings = "LKR 6,345.921";
        $activeUsers = "25";

        return view('dashboard', compact('subscriptions', 'earnings', 'activeUsers'));
    }
}

