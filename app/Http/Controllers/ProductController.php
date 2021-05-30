<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {    	
    	$relatedProducts = Product::where('category_id', $product->category->id)
							->take(5)
							->get()
							->except($product->id);

    	return view('products.show', compact('product', 'relatedProducts'));
    }
}
