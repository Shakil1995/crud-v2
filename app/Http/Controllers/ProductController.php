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
        $viewBag['products']  = Product::orderBy('id', 'DESC')
                                ->get(['id', 'category_id', 'name', 'stock', 'price']);
        
        return view('products.index', $viewBag);
    }


    public function create()
    {
        $viewBag['categories'] = Category::where('is_active', 1)
                                    ->all(['id', 'category_name']);

        return  view('products.create', $viewBag);
    }

    public function store(StoreProductRequest $request)
    {
        try {
            $product = new Product();

            $product->category_id  = $request->category_id;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->stock = $request->stock;
            $product->description   = $request->description;

            $product->save();

            return redirect()->route('products.index');

        } catch (\Throwable $e) {
            //throw $th;
            return back()->with('message', $e->getMessage());
        }
    }


    public function show(Product $product)
    {
        $viewBag['product'] = $product;

        return view('products.show', $viewBag);
    }


    public function edit(Product $product)
    {
        $viewBag['categories'] = Category::all(['id', 'category_name']);
        $viewBag['product'] = $product;

        return view('products.edit', $viewBag);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        try {
            $product->category_id = $request->category_id;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->stock = $request->stock;
            $product->description = $request->description;

            if ($product->isDirty()) {
                $product->update();
                // produce success message
            }

            return redirect()->route('products.index');

        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function destroy(Product $product)
    {
        $product->delete();
        
        return redirect()->route('products.index');
    }
}
