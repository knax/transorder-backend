<?php namespace Transorder\Http\Controllers;

use Transorder\Http\Requests;
use Transorder\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Http\Request;
use Transorder\Product;
use \View;

class ProductController extends Controller {

    public function index()
    {
        $products = Product::with('colors')->get()->sortBy('created_by');
        return View::make('product.list', compact('products'));
	}

    public function detail(FormBuilder $formBuilder, $id)
    {
        $product = Product::findOrFail($id);

        $choices = [];
        foreach($product->colors as $color) {
            $choices[$color->id] = $color->name;
        }

        $form = $formBuilder->create('Transorder\Forms\OrderForm', [
            'method' => 'POST',
            'url' => route('order.product.by_color_id', ['colorId' => $product->id]),
            'data' => ['colors_available' => $choices]
        ]);

        return View::make('product.detail', compact('product', 'form'));
    }

}
