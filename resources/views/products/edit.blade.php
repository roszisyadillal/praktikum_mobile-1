<!-- resources/views/products/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="sku">SKU:</label>
            <input type="text" class="form-control" id="sku" name="sku" value="{{ $product->sku }}">
        </div>
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}">
        </div>
        <div class="form-group">
            <label for="product_detail">Product Detail:</label>
            <textarea class="form-control" id="product_detail" name="product_detail">{{ $product->product_detail }}</textarea>
        </div>
        <div class="form-group">
            <label for="product_price">Product Price:</label>
            <input type="number" class="form-control" id="product_price" name="product_price" value="{{ $product->product_price }}">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ $product->status }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
