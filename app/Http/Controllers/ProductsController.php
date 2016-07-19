<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Product;
class ProductsController extends Controller
{
    public function create(){
        return view('product.create');
    }

    public function store(ProductRequest $request){
    	$product = Product::create([
    		'title' => $request->input('name_p'),
    		'description' => $request->input('desc_p'),
    		'price' => $request->input('price_p'),
    		'stock' => $request->input('stock_p'),
    		'status' => $request->input('status_p')
    	]);

    	$product->save();

        return redirect('/product/create');
    	// return "HIHI";
    }
}
