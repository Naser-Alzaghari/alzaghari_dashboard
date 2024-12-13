
    <div class="airi-product">
        <div class="product-inner">
            <figure class="product-image" >
                <div class="
                product-image--holder
                ">
                
                <a href="{{ route('product-details', $product->id)  }}" class="d-flex flex-column justify-content-center align-items-center">
                    @if ($product->images->isNotEmpty())
                        <img src="{{ asset('storage/' . $product->images[0]->image_url) }}" alt="Product Image" class="primary-image">
                        @if ($product->images->count() > 1)
                            <img src="{{ asset('storage/' . $product->images[1]->image_url) }}" alt="Product Image" class="secondary-image">
                        @else
                            <img src="{{ asset('storage/' . $product->images[0]->image_url) }}" alt="Product Image" class="secondary-image">
                        @endif
                    @else
                        <img src="{{ asset('storage/images/default_product.png')}}" alt="Product Image" class="primary-image">
                        <img src="{{ asset('storage/images/default_product.png')}}" alt="Product Image" class="secondary-image">
                    @endif
                    
                </a>                
                </div>
                <div class="airi-product-action">
                    <div class="product-action">
                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick Shop">
                            <span data-bs-toggle="modal" data-bs-target="#productModal" data-product-id="{{ $product->id }}">
                              <i class="dl-icon-view"></i>
                            </span>
                          </a>
                          
                        {{-- <form action="{{route('cart.add')}}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <button class="add_to_cart_btn action-btn"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                            <i class="dl-icon-cart29"></i>
                            </button>
                        </form> --}}

                        <a href="#" class="add_to_cart_btn action-btn" data-product-name="{{$product->name}}" data-product-id="{{ $product->id }}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                            <i class="dl-icon-cart29"></i>
                        </a>
                        
                        
                        
                        
                        <a class="add_wishlist action-btn" href="wishlist.html"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                            <i class="dl-icon-heart4"></i>
                        </a>
                        <a class="add_compare action-btn" href="compare.html"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare">
                            <i class="dl-icon-compare"></i>
                        </a>
                    </div>
                </div>
                @if (isset($product->price_after_discount))
                    <span class="product-badge sale">Sale</span>
                @endif


                {{-- @switch($n=rand(1,3))
                    @case(1)
                    <span class="product-badge new">New</span>
                        @break
                    @case(2)
                    <span class="product-badge hot">hot</span>
                        @break
                    @case(3)
                    <span class="product-badge sale">Sale</span>
                        @break
                    @default
                        
                @endswitch --}}

                
                
                
            </figure>
            <div class="product-info">
                <h3 class="product-title">
                    <a href="product-details.html">{{$product->name}}</a>
                </h3>
                @if (number_format($product->averageRating()) != 0)
                <div class="product-rating">
                    <span>
                        @for ($i = 0; $i < number_format($product->averageRating()); $i++)
                            <i class="dl-icon-star rated"></i>
                        @endfor
                        @for ($i = number_format($product->averageRating()); $i < 5; $i++)
                            <i class="dl-icon-star"></i>
                        @endfor
                    </span>
                    <span class="inline-block ms-4">
                        {{$product->ratingsCount()}} ratings
                    </span>
                </div>  
                @endif
                
                <span class="product-price-wrapper">
                    @if (isset($product->price_after_discount))
                    <span class="money">{{$product->price_after_discount}}JD</span>
                    <span class="product-price-old">
                        <span class="money">{{$product->price}}JD</span>
                    </span>
                    @else
                    <span class="money">{{$product->price}}JD</span>
                    @endif
                    
                    <div class="product-color-swatch">
                        @foreach ($product->colors as $color)
                        <a class="product-color-swatch-btn" style="background-color: {{$color->hex_code}}">
                            <span class="product-color-swatch-label"></span>
                        </a>
                        @endforeach
                    </div>
                </span>
            </div>
        </div>
    </div>


    

