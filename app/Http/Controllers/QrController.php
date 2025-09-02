<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrController extends Controller
{
    public function index()
    {
        // Sample data for the QR codes
        $qrcodes = [
            ['title' => 'Book QR Code 1', 'scans' => 150, 'status' => 'Active'],
            ['title' => 'Promo QR Code 2', 'scans' => 75, 'status' => 'Inactive'],
            ['title' => 'Event QR Code 3', 'scans' => 210, 'status' => 'Active'],
        ];

        return view('qr.index', compact('qrcodes'));
    }
}