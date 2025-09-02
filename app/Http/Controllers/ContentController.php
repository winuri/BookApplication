<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        // Example data
        $contents = [
            ['title' => 'Laravel Basics', 'type' => 'Book', 'status' => 'Published'],
            ['title' => 'React Tutorial', 'type' => 'Course', 'status' => 'Draft'],
            ['title' => 'Math Game', 'type' => 'Game', 'status' => 'Published'],
        ];

        return view('content.index', compact('contents'));
    }
}
