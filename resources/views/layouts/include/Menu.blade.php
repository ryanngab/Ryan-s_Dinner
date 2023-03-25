
@extends('layouts.layouts')
<form action="{{ route('products.addToCart', $product) }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary">Add to Cart</button>
</form>

<span class="badge badge-pill badge-danger">{{ auth()->user()->carts->sum('quantity') }}</span>
