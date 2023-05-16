@extends('layouts.layouts')

@section('content')
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <form action="{{route('checkout')}}" method="post">
        @csrf
        <tbody>
            @php $total = 0 @endphp
            @if(session('cart'))
            @foreach(session('cart') as $id_product => $details)
            @php $total += $details['price'] * $details['quantity'] @endphp
            <tr data-id="{{ $id_product }}">
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100"
                                class="img-responsive" /></div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $details['name'] }}</h4>
                            <input type="hidden" name="id_product[]" value="{{$id_product}}">
                        </div>
                    </div>
                </td>
                <td data-th="Price">RP. {{ $details['price'] }}</td>
               
                <td data-th="Quantity">
                    <input type="text" value="{{ $details['quantity'] }}" class="form-control"
                        min="1" name="total_pesanan[]" readonly/>
                </td>
                <td data-th="Subtotal" class="text-center">
                <input type="hidden" name="totalPrice[]" value="{{ $details['price'] * $details['quantity'] }}">
                    ${{ $details['price'] * $details['quantity'] }}
                </td>
                <td class="actions" data-th="">
                    <a href="" class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</a>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" class="text-right">
                    <h3><strong>Total Rp. {{ $total }}</strong></h3>
                </td>
            </tr>
            <tr>
                <td colspan="5" class="text-right">
                    <a href="{{ url('/orders') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue
                        Shopping</a>
                    <button class="btn btn-success mt-2"><i class="fa fa-money"></i>Checkout</button>
                </td>
            </tr>
        </tfoot>
    </form>
</table>
@endsection

@section('scripts')
<script type="text/javascript">
   $(".cart_update").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
    $(".cart_remove").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection