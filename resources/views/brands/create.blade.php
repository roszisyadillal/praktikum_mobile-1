<!-- resources/views/brands/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Create Brand</h1>
    <form action="{{ route('brands.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product_brand">Product Brand:</label>
            <input type="text" class="form-control" id="product_brand" name="product_brand">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" name="status">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('brands.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
