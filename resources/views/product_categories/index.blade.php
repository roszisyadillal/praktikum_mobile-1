<!-- resources/views/product_categories/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Product Categories</h1>
    <a href="{{ route('product-categories.create') }}" class="btn btn-primary mb-3">Create New Category</a>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productCategories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->product_category_name }}</td>
                    <td>{{ $category->status }}</td>
                    <td>
                        <a href="{{ route('product-categories.show', $category->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('product-categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('product-categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
