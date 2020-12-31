<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        //Get all products from the database.
        $products = Product::orderBy('created_at', 'desc')->get();

        return view('shop.index', [
            'products' => $products
        ]);
    }
}
