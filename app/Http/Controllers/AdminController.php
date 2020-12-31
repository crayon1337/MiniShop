<?php

namespace App\Http\Controllers;

//Laravel helper classes
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//Application Models.
use App\Models\Admin;
use App\Models\Language;
use App\Models\Product;
use App\Models\User;
//Form Requests.
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\StoreAdminRequest;


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
            'languagesCount' => Language::count(),
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
        return view('admin.language', ['languages' => Language::orderBy('created_at', 'desc')->get()]);
    }

    /**
     * Return the view of products
     * return languages view
    */
    public function products()
    {
        // Return all available products to the view.
        return view('admin.product', [ 'products' => Product::with('language')->orderBy('created_at', 'desc')->get() ]);
    }

    /**
     * Return the view of admins
     * return languages view
    */
    public function admins()
    {
        // Return all availble admins to the view.
        return view('admin.admins', [ 'admins' => Admin::with('language')->orderBy('created_at','desc')->get() ]);
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

    /**
     * Validate the request from the admin
     * Create the product in the database!
    */
    public function saveProduct(StoreProductRequest $request)
    {
        //Get the validated data from StoreProductRequest Class
        $data = $request->validated();

        //Store the product in the database.
        Product::create($data);

        //Return back with a message.
        return back()->with(['status' => 'The product has been saved successfully']);
    }

    /**
     * Validate the request from the admin
     * Create the language in the database!
    */
    public function saveLanguage(StoreLanguageRequest $request)
    {
        //Get the validated data from StoreLanguageRequest Class
        $data = $request->validated();

        //Store the language in the database.
        Language::create($data);

        //Return back with a message.
        return back()->with(['status' => 'The language has been saved successfully']);
    }

    /**
     * Validate the request from the admin
     * Create the admin in the database!
    */
    public function saveAdmin(StoreAdminRequest $request)
    {
        //Get the validated data from StoreAdminRequest Class
        $data = $request->validated();

        //Hash the password before we save it. (Tweak it)
        $data['password'] = Hash::make($data['password']);

        //Store the admin in the database.
        Admin::create($data);

        //Return back with a message.
        return back()->with(['status' => 'The admin user has been created successfully']);
    }
}
