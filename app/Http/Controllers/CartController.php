<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index()
    {

    	return view('carts.index', [
    		'carts' => Cart::getContent()
    	]);
    }

    public function store()
    {
    	$product = Product::findOrFail(request('product'));

    	Cart::add([
		    'id' => $product->id, // inique row ID
		    'name' => $product->name,
		    'price' => $product->price,
		    'quantity' => 1,
		    'attributes' => ['image' => $product->photos()->first()->image]
		]);

		return back();

    }

    public function update()
    {
    	Cart::update(request('id'),['quantity' => 1]);

		return 'done';
    }

    public function remove($cartId)
    {
    	Cart::remove($cartId);

    	return back();
    }
}
