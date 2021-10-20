<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CatalogoController extends Controller
{
    public function index()
    {
        $products = Product::all();
        //dd($products);
        return view('catalogo', compact('products'));
    }
}
