@if (Session::has('deletecart'))
    <script>
        alert('{{ Session::get('deletecart') }}');
    </script>
@endif
<style>
    .cart-view-total {
        width: 400px;
        margin: 0 auto;
        text-align: center;
        /* background-color: #f7f7f7; */
    }

    .cart-view-total h4 {
        color: #555;
        font-size: 28px;
        font-weight: bold;
        text-align: cen;
        margin-bottom: 15px;
    }

    .cart-view-total .aa-totals-table {
        border: 1px solid #ccc;
        width: 100%;
    }

    .cart-view-total .aa-totals-table tr th {
        padding: 10px;
        text-align: center;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
    }

    .cart-view-total .aa-totals-table tr td {
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        text-align: center;
        padding: 10px;
    }

    .cart-view-table .cart-view-total a {
        margin-top: 30px;
        display: inline-block;
        float: none;
    }

</style>

@extends('layout.layout')
@section('content')
    <?php $st = 0; ?>
    <div class="main-banner header-text" style="padding-top:10rem">
        <div class="container">
            <table class="table table" style="background-color: #f7f7f7;">
                <thead>
                    <tr>
                        <th></th>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($res as $item)
                        <tr>
                            <td><a class="remove" href="/deletecart/{{ $item->id }}">
                                    <fa class="fa fa-close"></fa>
                                </a></td>
                            <td><a href="/product-detail/{{ $item->proid }}"><img src="{{ $item->productimage }}"
                                        alt="img" style="width: 45px; height:45px"></a></td>
                            <td><a class="aa-cart-title"
                                    href="/product-detail/{{ $item->proid }}">{{ $item->productname }}</a>
                            </td>
                            <td>{{ $item->color }}</td>
                            <td>{{ $item->price }}</td>
                            <td><input class="aa-cart-quantity" type="number" value="{{ $item->qut }}"
                                    id="qut{{ $item->id }}" onchange="update({{ $item->id }})"
                                    onkeypress="update({{ $item->id }})" style="width:50px"></td>

                            <td id="price{{ $item->id }}">{{ $item->qut * $item->price }}</td>
                        </tr>
                        <?php $st = $st + $item->qut * $item->price; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="cart-view-total" id="sub">
            <h4>Cart Totals</h4>
            <table class="aa-totals-table">
                <tbody>
                    <tr>
                        <th>Subtotal</th>
                        <td id="new">{{ $st }}</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td id="new1">{{ $st }}</td>
                    </tr>
                </tbody>
            </table>
            <form action="/checkout">
                <button class="aa-cart-view-btn">Proced to Checkout</button>
            </form>

        </div>
    </div>

@endsection
<script>
    function update(param) {
        $qut = document.getElementById('qut' + param).value;
        var product_id = param;
        $.ajax({
            url: "/uptcart",
            type: "get",
            data: {
                id: product_id,
                quntity: $qut
            },
            success: function(response) {
                if($qut<=0){
                    alert(response.msg);
                    window.location.reload();
                }else{
                document.getElementById('price' + param).innerHTML = response.price;
                document.getElementById('new').innerHTML = response.totalprice;
                document.getElementById('new1').innerHTML = response.totalprice;
                }
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    }
</script>
