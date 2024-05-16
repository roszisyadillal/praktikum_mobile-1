<!-- resources/views/products/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">View Product</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>SKU:</strong> {{ $product->sku }}</p>
            <p><strong>Product Name:</strong> {{ $product->product_name }}</p>
            <p><strong>Product Detail:</strong> {{ $product->product_detail }}</p>
            <p><strong>Product Price:</strong> {{ $product->product_price }}</p>
            <p><strong>Status:</strong> {{ $product->status }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
