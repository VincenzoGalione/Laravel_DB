<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        
        //i dati del form
        $name = $request->name;
        // $name = $request->input('name'); è uguale a sopra
        $description = $request->description;
        $price = $request->price;

        // METODO SALVARE DATI DB 1
        //creo un nuovo oggetto di classe product
        $product = new Product();

        // Valorizzando i campi dell'oggetto $product
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;

        

        // Sto salvando il prodotto nel mio db
        $product->save();


        // METODO SALVARE DATI DB 2
        // MASS ASSIGNMENT

        // Product::create([
        //     'name' =>$name,
        //     'description' => $description,
        //     'price' => $price,
        // ]);

        return redirect()->back();
    }

    public function index (){
        // Sto richiedendo al mio db tutti gli elementi all'interno della tabella products
        $product = Product::all();
        return view ('product.index', ['products' => $product]);
    }
}
