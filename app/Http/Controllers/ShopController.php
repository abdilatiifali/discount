<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{

	public function index()
	{
		return view('shops.index', [
			'products' => Product::latest()->get()
		]);
	}


    public function show(Category $category)
    {

    	$products = Product::where('category_id', $category->id)->get();


    	return view('shops.index', compact('products', 'category'));
    }
}
