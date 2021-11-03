<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/main', function () {
    return view('main', [
        "title" => "Foodie v0.1",
        "products" => Product::all()
    ]);
});

Route::get('/main/{id}', function ($id) {
    return view('product', [
        "title" => Product::find($id)["title"],
        "product" => Product::find($id)
    ]);
});
