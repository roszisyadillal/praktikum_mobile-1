<!-- resources/views/product_categories/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Product Category</h1>
    <form action="{{ route('product-categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="product_category_name">Category Name:</label>
            <input type="text" class="form-control" id="product_category_name" name="product_category_name" value="{{ $category->product_category_name }}">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ $category->status }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('product-categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
