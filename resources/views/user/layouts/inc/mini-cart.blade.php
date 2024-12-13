<aside class="mini-cart" id="miniCart">
    <div class="mini-cart-wrapper">
        <a href="" class="btn-close"><i class="dl-icon-close"></i></a>
        <div class="mini-cart-inner">
            <h5 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h5>
            <div class="mini-cart__content">
                <ul class="mini-cart__list mini-cart-items">
                    @foreach ($cartItems as $item)
                    <li class="mini-cart__product" data-product-id="{{$item['product']->id}}">
                        
                        <div class="mini-cart__product__image">
                            @if ($item['product']->images->isNotEmpty())
                                <img src="{{ asset('storage/' . $item['product']->images[0]->image_url) }}" alt="Product Image">
                            @else
                                <img src="{{ asset('storage/images/default_product.png')}}" alt="Product Image">
                            @endif
                        </div>
                        <div class="mini-cart__product__content">
                            <a class="mini-cart__product__title" href="{{route('product-details', $item['product']->id)}}">{{$item['product']->name}} </a>
                            <div class="quantity-controls">
                                <button class="update-cart-quantity btn-decrease" data-product-id="{{ $item['product']->id }}" data-action="decrease">
                                    <i class="{{ $item['quantity'] > 1 ? 'fa-solid fa-minus' : 'fa-solid fa-trash' }}"></i>
                                </button>
                                <input type="number" class="mini-cart-quantity" data-product-id="{{ $item['product']->id }}" value="{{ $item['quantity'] }}" readonly>
                                <button class="update-cart-quantity btn-increase" data-product-id="{{ $item['product']->id }}" data-action="increase">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                            

                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="mini-cart__total cart-total">
                    <span>Subtotal</span>
                    <span class="ammount" id="cart-total">$98.00</span>
                </div>
                <div class="mini-cart__buttons">
                    <a href="{{route('cart.view')}}" class="btn btn-fullwidth btn-style-1">View Cart</a>
                    <a href="{{route('checkout')}}" class="btn btn-fullwidth btn-style-1">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</aside>