<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    public function show($id)
    {
        // Find the product by its ID
        $product = Product::findOrFail($id);

        // Pass the $product variable to the view
        return view('product.show', compact('product'));
    }
}
