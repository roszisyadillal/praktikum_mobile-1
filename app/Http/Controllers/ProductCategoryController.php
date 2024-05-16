<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $productCategories = ProductCategory::all();
        return view('product_categories.index', compact('productCategories'));
    }

    public function create()
    {
        return view('product_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_category_name' => 'required|unique:product_categories',
            'status' => 'required',
        ]);

        $category = new ProductCategory();
        $category->product_category_name = $request->product_category_name;
        $category->status = $request->status;
        $category->save();

        return redirect()->route('product-categories.index');
    }

    public function show(ProductCategory $category)
    {
        return view('product_categories.show', compact('category'));
    }

    public function edit(ProductCategory $category)
    {
        return view('product_categories.edit', compact('category'));
    }

    public function update(Request $request, ProductCategory $category)
    {
        $request->validate([
            'product_category_name' => 'required|unique:product_categories,product_category_name,'.$category->id,
            'status' => 'required',
        ]);
        
        $category->product_category_name = $request->product_category_name;
        $category->status = $request->status;
        $category->save();

        return redirect()->route('product-categories.index');
    }

    public function destroy(ProductCategory $category)
    {
        $category->delete();
        return redirect()->route('product-categories.index');
    }
}
