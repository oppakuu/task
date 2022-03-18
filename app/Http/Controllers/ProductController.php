<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        
        return view('products.index', ['products' => $products]);
    }
    
    public function show(Product $product) {
        return view('products.show', ['products' => $product]);
    }
    
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable',
            'status'=> 'required'
        ]);
        
        $product = Product::create($request->all());
        
        return view('', ['products' => $product]);
    }
    
    public function update(Product $product, Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable',
            'status'=> 'required'
        ]);
        
        $product->update($request->all());
        
        return view('', ['products' => $product]);
    }

    public function delete(Product $product) {
        $product->delete();

        return view('products.index');
    }
}
