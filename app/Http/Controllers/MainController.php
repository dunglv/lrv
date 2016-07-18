<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class MainController extends Controller
{
    public function index(){
    	$products = Product::all();
    	return view('product.index')->with('products', $products);
    }

    public function store(){
    	session_start();
    	$idP = $_GET['idP'];
    	$_SESSION['product']['id'][] = $idP;

    	// $_SESSION['product']['id'] = $_GET['idP'];
    	// print_r($_SESSION['id']);
    	$str = '';
    	foreach ($_SESSION['product']['id'] as $key => $value) {
    		$str .= $value.'-';
    	}
    	return $str;
    }
}
