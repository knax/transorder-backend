<?php namespace Transorder\Http\Controllers;

use Transorder\Http\Requests;
use Transorder\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Transorder\Product;

class ProductController extends Controller {

    public function index()
    {
        $products = Product::with('colors')->get()->sortBy('created_by');
        return view('product.list', compact('products'));
	}

}
