<!-- resources/views/product_categories/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">View Product Category</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Category Name:</strong> {{ $category->product_category_name }}</p>
            <p><strong>Status:</strong> {{ $category->status }}</p>
            <a href="{{ route('product-categories.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
