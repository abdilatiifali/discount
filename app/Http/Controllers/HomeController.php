<?php

namespace App\Http\Controllers;

use App\Models\Advertise;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
    	$featureProducts = Product::query()
    							->orderByDesc('views')
    							->take(5)
    							->get();

        $speicalCategories = DB::table('categories')
                                ->join('products', 'products.category_id', '=', 'categories.id')
                                ->select('categories.name')
                                ->groupBy('categories.name')
                                ->take(3)
                                ->get();


        $results = [];

        // top 3 categories and thier 3 most sold products
        foreach($speicalCategories as $category) {
            $sub = Category::where('name', $category->name)->first();

            $results[$category->name] = Product::where('category_id', $sub->id)->take(3)->get();
        }

        // dd($results);

    	return view('welcome', [
    		'sliders' 			=> Carousel::all(),
    		'newArrivals'		=> Product::latest()->take(8)->get(),
    		'featureProducts' 	=> $featureProducts,
            'specialcategories' => collect($results),
    		'advertise'  		=> Advertise::first(),
    	]);
    }
}
