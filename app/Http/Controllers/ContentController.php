<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index() {
        // Check session before showing content
        if (!session('is_admin_logged_in')) {
            return redirect()->route('login');
        }
        return view('content.index');
    }
}