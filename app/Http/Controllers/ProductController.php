<?php namespace Transorder\Http\Controllers;

use Transorder\Http\Requests;
use Transorder\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Http\Request;
use Transorder\Product;
use Illuminate\Contracts\View\Factory as ViewFactory;

class ProductController extends Controller
{

    /**
     * @var \Illuminate\Contracts\View\Factory View
     */
    private $view;
    /**
     * @var Product
     */
    private $product;

    /**
     * @param \Illuminate\Contracts\View\Factory $view
     */
    public function __construct(ViewFactory $view, Product $product){
        $this->middleware('auth');

        $this->view = $view;
        $this->product = $product;
    }

    public function index()
    {
        $products = Product::with('colors')->get()->sortBy('created_by');
        return $this->view->make('product.list', compact('products'));
    }

    public function detail(FormBuilder $formBuilder, $id)
    {
        $product = $this->product->with('colors')->findOrFail($id);

        $choices = [];
        foreach ($product->colors as $color) {
            $choices[$color->id] = $color->name;
        }

        $form = $formBuilder->create('Transorder\Forms\Order\OrderForm', [
            'method' => 'POST',
            'url' => route('order.product'),
            'data' => ['colors_available' => $choices]
        ]);

        return $this->view->make('product.detail', compact('product', 'form'));
    }
}
