<?php namespace Transorder\Http\Controllers\Api\V1;

use Illuminate\Contracts\Routing\ResponseFactory as Response;
use Illuminate\Http\Request;
use Transorder\Http\Controllers\Controller;
use Transorder\Product as ProductModel;

class Product extends Controller {

    /**
     * @var Requests
     */
    private $request;
    /**
     * @var Response
     */
    private $response;
    /**
     * @var ProductModel
     */
    private $product;

    public function __construct(Request $request, Response $response, ProductModel $product)
    {
        $this->request = $request;
        $this->response = $response;
        $this->product = $product;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $products = $this->product->with('colors')->get();
        return $this->response->json($products);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
