

@extends('layouts.main')

@section('section')
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="assets/images/checkout.avif" alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h1 class="mb-5 text-center">Checkout</h1>
                                    <form method="POST" action="{{ route('checkout.store') }}">
                                        @csrf
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cart as $id => $details)
                                                    <tr data-id="{{ $id }}">
                                                        <td data-th="Product">
                                                            <div class="row">
                                                                <div class="col-sm-3 hidden-xs"><img
                                                                        src="{{ $details['image'] }}" width="100"
                                                                        height="100" class="img-responsive" /></div>
                                                                <div class="col-sm-9">
                                                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-th="Price">Rp{{ $details['price'] }}</td>
                                                        <td data-th="Quantity">
                                                            <input type="number" class="form-control quantity"
                                                                value="{{ $details['quantity'] }}" min="1">
                                                        </td>
                                                        <td data-th="Subtotal" class="text-center">
                                                            Rp{{ $details['price'] * $details['quantity'] }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3" class="text-right">Total</td>
                                                    <td class="text-center" id="total">Rp{{ $total }}</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="row my-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone_number">Phone Number</label>
                                                    <input type="text" class="form-control" id="phone_number"
                                                        name="phone_number" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <textarea class="form-control" id="address" name="address" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                Place Order
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection