<!-- resources/views/landing/cart/transaksi.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Checkout</h1>

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
                                <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100"
                                        class="img-responsive" /></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">Rp{{ $details['price'] }}</td>
                        <td data-th="Quantity">{{ $details['quantity'] }}</td>
                        <td data-th="Subtotal" class="text-center">Rp{{ $details['price'] * $details['quantity'] }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3">Total:</td>
                    <td>Rp{{ $total }}</td>
                </tr>
            </tbody>
        </table>

        <form method="POST" action="{{ route('checkout.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" name="city" id="city" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="province">Province:</label>
                <input type="text" name="province" id="province" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="zip_code">Zip Code:</label>
                <input type="text" name="zip_code" id="zip_code" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="payment_method">Payment Method:</label>
                <select name="payment_method" id="payment_method" class="form-control" required>
                    <option value="cash">Cash on Delivery</option>
                    <option value="credit_card">Credit Card</option>
                </select>
            </div>

            <div class="form-group">
                <input type="hidden" name="cart_total" id="cart_total" value="{{ $total }}">
                <button type="submit" class="btn btn-primary">Place Order</button>
            </div>
        </form>
    </div>
@endsection
