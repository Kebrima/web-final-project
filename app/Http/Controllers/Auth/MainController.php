<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request){
        //dd($request->all());
        $productsQuery = Product::query();

        if ($request->filled('price_from')){
            $productsQuery->where('price','>=',$request->price_from);
        }
        if ($request->filled('price_to')){
            $productsQuery->where('price','<=',$request->price_to);
        }
        foreach (['hit', 'new','recommend'] as $field){
            if ($request->has($field)){
                $productsQuery->where($field,'1');
        }
        }
        $products = $productsQuery->Paginate(3)->withPath("?" . $request->getQueryString());
        return view('index', compact('products'));
    }
    public function categories(){
        $categories = Category::get();
        return view('categories', compact('categories'));
    }
    public function category($code){
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));

    }
    public function product($category, $productCode){
        $product = Product::where('code', $productCode)->first();
        return view('product', compact('product'));
    }
}
