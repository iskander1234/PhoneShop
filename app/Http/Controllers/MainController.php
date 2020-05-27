<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request){

        $productsQuery = Product::query();

        if ($request->filled('price_from')){
            $productsQuery->where('price' ,'>=', $request-> price_from);
        }
        if ($request->filled('price_to')){
            $productsQuery->where('price' ,'<=', $request-> price_to);
        }
        $products = $productsQuery->paginate(5);
        return view('index',compact('products'));
    }
    public function brands(){
        $brands = Brand::get();
        return view('brands' ,compact('brands'));
    }
    public function brand($code){
        $brand = Brand::where('code' , $code )->first();
        return view('brand', compact('brand'));
    }
    public function product($brand, $product = null){
        return view('product', ['product'=> $product]);
    }
}
