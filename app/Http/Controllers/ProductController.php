<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        return view('main', [
            "title" => "Foodie v0.1",
            "products" => Product::all()
        ]);
    }

    public function product($id)
    {
        return view('product', [
            "title" => Product::find($id)["title"],
            "product" => Product::find($id)
        ]);
    }
}
