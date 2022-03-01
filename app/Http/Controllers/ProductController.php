<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $viewBag['products'] = Product::orderBy('id', 'desc')->get();
        return view('products.index', $viewBag);
    }


    public function create()
    {
        
       $viewBag['categories']= Category::all();
        return  view('products.create',$viewBag);
    }

    public function store(StoreProductRequest $request ,Product $product)
    {
        try {
            $product->category_id  = $request->category_id;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->stock = $request->stock;
            $product->description   = $request->description;
            $product->save();

            return redirect()->route('products.index');
        } catch (\Throwable $th) {
            throw $th;
        }

    }


    public function show(Product $product)
    {
        $viewBag['product'] = $product;
        return view('products.show', $viewBag);
    }


    public function edit(Product $product)
    {
        $viewBag['categories']= Category::all();
        $viewBag['product'] = $product;
        return view('products.edit', $viewBag);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->category_id  = $request->category_id;
        $product->name  = $request->name;
        $product->price   = $request->price;
        $product->stock   = $request->stock;
        $product->description   = $request->description;
        if($product->isDirty()){
            $product->update();
        }
        return redirect()->route('products.index');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
