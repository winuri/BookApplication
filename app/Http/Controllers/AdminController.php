<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginForm() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $validUsername = "admin";
        $validPassword = "12345678";

        if ($request->username === $validUsername && $request->password === $validPassword) {
            // Set a manual session flag
            session(['is_admin_logged_in' => true]);
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Invalid Credentials');
    }

    public function index() {
        // Manual security check
        if (!session('is_admin_logged_in')) {
            return redirect()->route('login');
        }

        return view('dashboard', [
            'activeUsers' => 150,
            'subscriptions' => 12,
            'earnings' => '$500'
        ]);
    }
}