<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sku' => 'required|unique:products,sku,'.$product->id,
            'product_name' => 'required',
            'product_detail' => 'required',
            'product_price' => 'required|numeric',
            'status' => 'required',
        ]);

        $product = new Product();
        $product->sku = $request->sku;
        $product->product_name = $request->product_name;
        $product->product_detail = $request->product_detail;
        $product->product_price = $request->product_price;
        $product->status = $request->status;
        $product->save();

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'sku' => 'required|unique:products,sku,'.$product->id,
            'product_name' => 'required',
            'product_detail' => 'required',
            'product_price' => 'required|numeric',
            'status' => 'required',
        ]);
        
        $product->sku = $request->sku;
        $product->product_name = $request->product_name;
        $product->product_detail = $request->product_detail;
        $product->product_price = $request->product_price;
        $product->status = $request->status;
        $product->save();

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
