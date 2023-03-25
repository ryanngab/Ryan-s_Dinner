@extends('layouts.main')
@section('section')

<style>
    @keyframes zoom {
        from {
            transform: scale(0.1);
        }
        to {
            transform: scale(1);
        }
    }

    .card {
        animation: zoom 1s;
    }

    .card:hover {
        transition: 0.3s;
        transform: scale(1.1)
    }
</style>

    <div class="container mt-3">
        <a href="/cart" class="btn btn-warning">My Cart <i class="bi bi-cart-plus"></i></a>
        <a href="/CC" class="btn btn-danger"> Back </a>

        <div class="row">
            @foreach ($product as $product)
                <div class="col-lg-3 mt-4">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/f1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{$product->name}}</strong></h5>
                            <p class="card-text"><strong>Price : </strong>Rp {{$product->price}}</p>
                            <p class="card-text">{{$product->description}}</p>
                            <a href="#" class="btn btn-primary">Order</a>
                            <a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-warning">add to Cart <i class="bi bi-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
