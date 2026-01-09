<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrController extends Controller
{
    public function index() {
        // Security check
        if (!session('is_admin_logged_in')) {
            return redirect()->route('login');
        }
        return view('qr.index'); // Make sure this view file exists
    }
}