<?php namespace Transorder\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Transorder\Http\Requests;
use Transorder\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function order(Guard $auth)
    {
        dd($auth);
    }
}
