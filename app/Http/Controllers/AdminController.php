<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Language;
use App\Models\Product;
use App\Models\User;


class AdminController extends Controller
{
    /**
     * Load the dashboard of the admin!
     * return view
     */
    public function index()
    {
        return view('admin.index', [
            'admins' => Admin::count(),
            'users' => User::count(),
            'languages' => Language::count(),
            'products' => Product::count()
        ]);
    }

    /**
     * Return the view of languages
     * return languages view
    */
    public function languages()
    {
        //Return all available languages to the view.
        return view('admin.language', ['languages' => Language::all()]);
    }

    /**
     * Return the view of products
     * return languages view
    */
    public function products()
    {
        // Return all available products to the view.
        return view('admin.product', [ 'products' => Product::with('language')->get() ]);
    }

    /**
     * Return the view of admins
     * return languages view
    */
    public function admins()
    {
        // Return all availble admins to the view.
        return view('admin.admins', [ 'admins' => Admin::with('language')->get() ]);
    }

    /**
     * Return the view of users
     * return languages view
    */
    public function users()
    {
        // Return all users to the view.
        return view('admin.user' , [ 'users' => User::all() ]);
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
