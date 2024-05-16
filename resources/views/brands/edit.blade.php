<!-- resources/views/brands/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Brand</h1>
    <form action="{{ route('brands.update', $brand->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="product_brand">Product Brand:</label>
            <input type="text" class="form-control" id="product_brand" name="product_brand" value="{{ $brand->product_brand }}">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ $brand->status }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('brands.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
