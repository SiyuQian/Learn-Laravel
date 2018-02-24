<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	return View::make('products.list')->with(['products' => $products]);
    }
}
