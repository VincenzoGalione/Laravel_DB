<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;


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
       $product->user_id = Auth::user()->id;
       

       $product->save();

       return redirect()->back()->with('message', 'Prodotto inserito correttamente');
    }

    public function index(){

        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    public function destroy(Product $product)
    {
        //
        $product->delete();

        return redirect()->back()->with('message', 'prodotto eliminato');
    }
}
