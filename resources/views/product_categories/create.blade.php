<!-- resources/views/product_categories/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Create Product Category</h1>
    <form action="{{ route('product-categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product_category_name">Category Name:</label>
            <input type="text" class="form-control" id="product_category_name" name="product_category_name">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" name="status">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('product-categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
