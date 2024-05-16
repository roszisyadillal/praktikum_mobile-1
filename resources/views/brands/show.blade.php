<!-- resources/views/brands/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">View Brand</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Product Brand:</strong> {{ $brand->product_brand }}</p>
            <p><strong>Status:</strong> {{ $brand->status }}</p>
            <a href="{{ route('brands.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
