@extends('user.layouts.master')

@section('content')
<div id="content" class="main-content-wrapper">
    <div class="page-content-inner">
        <div class="container">
            <div class="row pt--150 pb--80 pt-md--45 pt-sm--25 pb-md--60 pb-sm--40">
                <div class="col-lg-8 mb-md--30">
                    <form class="cart-form" action="#">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="table-content table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>&nbsp;</th>
                                                <th class="text-start">Product</th>
                                                <th>price</th>
                                                <th>quantity</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cartItems as $item)
                                                <tr>
                                                    <tr>
                                                        <td class="product-remove text-start"><a href=""><i
                                                                    class="dl-icon-close"></i></a></td>
                                                        <td class="product-thumbnail text-start p-3">
                                                            @if ($item['product']->images->isNotEmpty())
                                                                <img src="{{ asset('storage/' . $item['product']->images[0]->image_url) }}" alt="Product Thumnail">
                                                            @else
                                                                <img src="{{ asset('storage/images/default_product.png')}}" alt="Product Thumnail">
                                                            @endif
                                                        </td>
                                                        <td class="product-name text-start wide-column">
                                                            <h3>
                                                                <a href="product-details.html">{{ $item['product']->name }}</a>
                                                            </h3>
                                                        </td>
                                                        <td class="product-price">
                                                            <span class="product-price-wrapper">
                                                                <span class="money">${{ $item['product']->price }}</span>
                                                            </span>
                                                        </td>
                                                        <td class="product-quantity">
                                                            <div class="quantity">
                                                                <input type="number" class="quantity-input" name="qty"
                                                                    id="qty-1" value="{{ $item['quantity'] }}" min="1">
                                                            </div>
                                                        </td>
                                                        <td class="product-total-price">
                                                            <span class="product-price-wrapper">
                                                                <span class="money"><strong>${{ $item['product']->price * $item['quantity'] }}</strong></span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 border-top pt--20 mt--20">
                            <div class="col-sm-6">
                                <div class="coupon">
                                    <input type="text" id="coupon" name="coupon" class="cart-form__input"
                                        placeholder="Coupon Code">
                                    <button type="submit" class="cart-form__btn">Apply Coupon</button>
                                </div>
                            </div>
                            <div class="col-sm-6 text-sm-end">
                                <button type="submit" class="cart-form__btn">Clear Cart</button>
                                <button type="submit" class="cart-form__btn">Update Cart</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="cart-collaterals">
                        <div class="cart-totals">
                            <h5 class="mb--15">Cart totals</h5>
                            <div class="table-content table-responsive">
                                <table class="table order-table">
                                    <tbody>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td>$196.00</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td>
                                                <span>Flat rate: $20.00</span>
                                                
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$226.00</span>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="checkout.html" class="btn btn-fullwidth btn-style-1">
                            Proceed To Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
