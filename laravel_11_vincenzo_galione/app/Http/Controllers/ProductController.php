<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function create (){
        return view('product.create');
    }


    public function store (ProductRequest $request){
       $name = $request->name;
       $description = $request->description;
       $price = $request->price;
       $img = null;

       if ($request->file('img')) {
        $img = $request->file('img')->store('public/img');
       }

       $product = new Product();

       $product->name = $name;
       $product->description = $description;
       $product->price = $price;
       $product->img = $img;
       

       $product->save();

       return redirect()->back()->with('message', 'Prodotto inserito correttamente');
    }

    public function index(){

        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }
}
