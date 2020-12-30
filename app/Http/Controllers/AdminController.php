<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Load the dashboard of the admin!
     * return view
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Check whether the admin credentials are valid or not
     * Log him in and redirect to the dashboard
     * return @void
     */
    public function login(Request $request) 
    {
        $request->validate(['email' => 'required|string', 'password' => 'required|string']);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
            return redirect()->route('admin.index');
        
        return back()->withInput($request->only('email'))->withErrors(['password' => 'These credentials do not match our records.']);
    }
}
