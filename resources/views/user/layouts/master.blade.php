<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="user_assets/img/titleLogo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="user_assets/img/icon.png">

    <!-- Title -->
    <title>Alzaghari - Clean, Minimal eCommerce Bootstrap 5 Template</title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('user_assets/css/bootstrap.css')}}">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('user_assets/css/font-awesome.min.css')}}">

    <!-- dl Icon CSS -->
    <link rel="stylesheet" href="{{asset('user_assets/css/dl-icon.css')}}">

    <!-- All Plugins CSS  -->
    <link rel="stylesheet" href="{{asset('user_assets/css/plugins.css')}}">

    <!-- Revoulation CSS  -->
    <link rel="stylesheet" href="{{asset('user_assets/css/revoulation.css')}}">

    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('user_assets/css/main.css')}}">

    <!-- modernizr JS
    ============================================ -->
    <script src="{{asset('user_assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <div class="ai-preloader active">
        <div class="ai-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ai-child ai-bounce1"></div>
            <div class="ai-child ai-bounce2"></div>
            <div class="ai-child ai-bounce3"></div>
        </div>
    </div>

    <!-- Main Wrapper Start -->
    <div class="wrapper enable-header-transparent">
        @include('user.layouts.inc.nav-bar')

        <!-- Main Content Wrapper Start -->
        @yield('content')
        <!-- Main Content Wrapper Start -->


        <!-- Footer Start -->
        @include('user.layouts.inc.footer')
        <!-- Footer End -->

        <!-- Search from Start -->
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform">
                    <input type="text" name="search" id="search" class="searchform__input"
                        placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="dl-icon-search10"></i></button>
                </form>
            </div>
        </div>
        <!-- Search from End -->

        <!-- Side Navigation Start -->
        <aside class="side-navigation" id="sideNav">
            <div class="side-navigation-wrapper">
                <a href="" class="btn-close"><i class="dl-icon-close"></i></a>
                <div class="side-navigation-inner">
                    <div class="widget">
                        <ul class="sidenav-menu">
                            <li><a href="about-us.html">About Airi Shop</a></li>
                            <li><a href="about-us.html">Help Center</a></li>
                            <li><a href="shop-collections.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="shop-instagram.html">New Look</a></li>
                        </ul>
                    </div>
                    <div class="widget pt--30 pr--20">
                        <div class="text-widget">
                            <p>
                                <img src="{{asset('user_assets/img/others/payments.png')}}" alt="payment">
                            </p>
                            <p>Pellentesque mollis nec orci id tincidunt. Sed mollis risus eu nisi aliquet, sit amet
                                fermentum justo dapibus.</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <p>
                                <a href="#">(+612) 2531 5600</a>
                                <a href="mailto:demo@example.com">demo@example.com</a>
                                PO Box 1622 Colins Street West
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget google-map-link">
                            <p>
                                <a href="https://www.google.com/maps" target="_blank">Google Maps</a>
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <!-- Social Icons Start Here -->
                            <ul class="social social-small">
                                <li class="social__item">
                                    <a href="https://twitter.com" class="social__link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://plus.google.com" class="social__link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://facebook.com" class="social__link">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://youtube.com" class="social__link">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://instagram.com" class="social__link">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Social Icons End Here -->
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <p class="copyright-text">&copy; AIRI 2021 MADE WITH <i class="fa fa-heart"></i> BY HASTHEMES</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Side Navigation End -->

        <!-- Mini Cart Start -->
        @include('user.layouts.inc.mini-cart')
        <!-- Mini Cart End -->

        <!-- Global Overlay Start -->
        <div class="ai-global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Modal Start -->
<div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="dl-icon-close"></i></span>
          </button>
          <div class="row">
            <div class="col-md-6">
              <div class="airi-element-carousel product-image-carousel nav-vertical-center nav-style-1" data-slick-options='{"slidesToShow": 1, "slidesToScroll": 1, "arrows": true, "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "dl-icon-left" }, "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "dl-icon-right" }}'>
                <!-- Product images will be dynamically updated here -->
                <div class="product-image">
                  <div class="product-image--holder">
                    <a href="#" id="product-modal-link">
                      <img src="" alt="Product Image" class="primary-image" id="product-modal-img">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="modal-box product-summary">
                <h3 class="product-title mb--15" id="product-modal-title"></h3>
                <span class="product-price-wrapper mb--20">
                  <span class="money" id="product-modal-price"></span>
                  <span class="product-price-old"><span class="money" id="product-modal-old-price"></span></span>
                </span>
                <p class="product-short-description mb--25 mb-md--20" id="product-modal-description"></p>
                <div class="product-action d-flex flex-row align-items-center mb--30 mb-md--20">
                    <div class="quantity">
                        <input type="number" class="quantity-input" name="qty" id="qty" value="1"
                            min="1">
                    </div>
                  <button type="button" id="add_to_cart" class="btn btn-style-1 btn-large add-to-cart add_to_cart_btn">
                    Add To Cart
                    </button>
                  <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                  <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                </div>
                <div class="product-extra mb--30 mb-md--20">
                  <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near you</a>
                  <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and return</a>
                </div>
                <div class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column">
                  <div class="product-meta">
                    <span class="sku_wrapper font-size-12">SKU: <span class="sku" id="product-modal-sku"></span></span>
                    <span class="posted_in font-size-12">Categories: <a href="{{route('shop-sidebar')}}" rel="tag" id="product-modal-category">Fashions</a></span>
                  </div>
                  <div class="product-share-box">
                    <span class="font-size-12">Share With</span>
                    <ul class="social social-small">
                      <li class="social__item"><a href="https://facebook.com" class="social__link"><i class="fa fa-facebook"></i></a></li>
                      <li class="social__item"><a href="https://twitter.com" class="social__link"><i class="fa fa-twitter"></i></a></li>
                      <li class="social__item"><a href="https://plus.google.com" class="social__link"><i class="fa fa-google-plus"></i></a></li>
                      <li class="social__item"><a href="https://plus.google.com" class="social__link"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal End -->
  

        <!-- Newsletter Popup Start -->
        <!-- ********************** -->
        <!-- Newsletter Popup End -->

    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="{{asset('user_assets/js/vendor/jquery.min.js')}}"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="{{asset('user_assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- All Plugins Js -->
    <script src="{{asset('user_assets/js/plugins.js')}}"></script>

    <!-- Ajax Mail Js -->
    <script src="{{asset('user_assets/js/ajax-mail.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('user_assets/js/main.js')}}"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{asset('user_assets/js/revoulation/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('user_assets/js/revoulation/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{asset('user_assets/js/revoulation/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('user_assets/js/revoulation/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('user_assets/js/revoulation/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('user_assets/js/revoulation/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('user_assets/js/revoulation/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('user_assets/js/revoulation/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('user_assets/js/revoulation/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('user_assets/js/revoulation/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('user_assets/js/revoulation/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/29bcb0d26a.js" crossorigin="anonymous"></script>
    <!-- REVOLUTION ACTIVE JS FILES -->
    <script src="{{asset('user_assets/js/revoulation.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
    <script>
        $.ajax({
        url: '{{ route('cart.updateTotal') }}',
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
        },
        success: function(response) {
            console.log(response.total); // Log response data
            console.log(response); // Log response data
            $('#cart-total').text('$' + response.total); // Update cart total
        },
        error: function(xhr) {
            alert('Failed to update total.');
        }
    });
        $(document).ready(function() {
    // Add to Cart
    $('.add_to_cart_btn').click(function(e) {

        e.preventDefault();

        var $button = $(this);
        var productId = $button.data('product-id');
        var quantity = $button.siblings('.quantity').find('.quantity-input').val() ?? 1;
        var productName = $button.data('product-name');
        console.log($button.siblings('.quantity').find('.quantity-input').val());
        
        $button.prop('disabled', true);

        $.ajax({
            url: '{{ route('cart.add') }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                product_id: productId,
                quantity: quantity
            },
            success: function(response) {
                // Show alert with product name
                showAlert(`${productName ?? 'item'} has been added to cart!`);
                console.log('Success:', response);
                // alert('Product added to cart successfully!');
                $button.prop('disabled', false);
                $('#cart-item-count').text(response.cartItemCount);
                $('.mini-cart-count').text(response.cartItemCount); // Update mini cart count
                updateMiniCart(response.product, response.quantity);
            },
            error: function(xhr) {
                alert('Failed to add product to cart.');
                $button.prop('disabled', false);
            }
        });
        $.ajax({
        url: '{{ route('cart.updateQuantity') }}',
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            product_id: productId,
            quantity: quantity
        },
        success: function(response) {
            console.log(response.total); // Log response data
            console.log(response); // Log response data
            $('#cart-total').text('$' + response.total); // Update cart total
        },
        error: function(xhr) {
            alert('Failed to update total.');
        }
    });
    });

    // Update Quantity
    $(document).on('click', '.update-cart-quantity', function(e) {
    e.preventDefault();
    console.log('Update Quantity button clicked'); // Log click event

    var $button = $(this);
    var productId = $button.data('product-id');
    var action = $button.data('action');
    var $quantityInput = $button.siblings('.mini-cart-quantity');
    var quantity = parseInt($quantityInput.val());

    if (action === 'increase') {
        quantity++;
    } else if (action === 'decrease') {
        quantity--;
    }

    if (quantity <= 0) {
        console.log('Quantity is zero, removing item'); // Log quantity check
        removeCartItem(productId);
        return;
    }

    $.ajax({
        url: '{{ route('cart.updateQuantity') }}',
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            product_id: productId,
            quantity: quantity
        },
        success: function(response) {
            console.log(response.total); // Log response data

            console.log(response); // Log response data
            $('#cart-item-count').text(response.cartItemCount);
            $('.mini-cart-count').text(response.cartItemCount); // Update mini cart count
            $quantityInput.val(quantity);

            // Update item price and cart total
            $('#item-price-' + productId).text('$' + response.total); // Update item price
            $('#cart-total').text('$' + response.total); // Update cart total

            // Update button action and icon
            var decreaseButton = $button.closest('.quantity-controls').find('button[data-action="decrease"], button[data-action="remove"]');
            if (quantity === 1) {
                decreaseButton.attr('data-action', 'remove').html('<i class="fa-solid fa-trash"></i>');
            } else {
                decreaseButton.attr('data-action', 'decrease').html('<i class="fa-solid fa-minus"></i>');
            }
        },
        error: function(xhr) {
            alert('Failed to update quantity.');
        }
    });
});


    // Remove Item
    $(document).on('click', '.update-cart-quantity[data-action="remove"]', function() {
        var $button = $(this);
        var productId = $button.data('product-id');

        removeCartItem(productId);
    });

    function updateMiniCart(product, quantity) {
        console.log(product.images); // Log product data
        var miniCart = $('.mini-cart-items');
        var cartItem = miniCart.find('.mini-cart__product[data-product-id="' + product.id + '"]');

        if (cartItem.length > 0) {
            // Update quantity if product is already in the cart
            var existingQuantity = parseInt(cartItem.find('.mini-cart-quantity').val());
            var newQuantity = existingQuantity + quantity;
            cartItem.find('.mini-cart-quantity').val(newQuantity);

            // Update button action and icon
            var decreaseButton = cartItem.find('button[data-action="decrease"], button[data-action="remove"]');
            if (newQuantity === 1) {
                decreaseButton.attr('data-action', 'remove').html('<i class="fa-solid fa-trash"></i>');
            } else {
                decreaseButton.attr('data-action', 'decrease').html('<i class="fa-solid fa-minus"></i>');
            }
        } else {
            // Add new product to the cart
            var productHtml = `
                <li class="mini-cart__product" data-product-id="${product.id}">
                    
                    <div class="mini-cart__product__image">
                        ${product.images && product.images.length > 0 ? `<img src="{{ asset('storage/') }}/${product.images[0].image_url}" alt="${product.name}">` : '<img src="{{ asset('storage/images/default_product.png')}}" alt="Product Image">'}
                    </div>
                    <div class="mini-cart__product__content">
                        <a class="mini-cart__product__title">${product.name}</a>
                        <div class="quantity-controls">
                            <button class="update-cart-quantity" data-product-id="${product.id}" data-action="${quantity === 1 ? 'remove' : 'decrease'}">
                                <i class="fa-solid ${quantity === 1 ? 'fa-trash' : 'fa-minus'}"></i>
                            </button>
                            <input type="number" class="mini-cart-quantity" data-product-id="${product.id}" value="${quantity}" readonly>
                            <button class="update-cart-quantity" data-product-id="${product.id}" data-action="increase">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </li>
            `;
            miniCart.append(productHtml);
        }
    }

    function removeCartItem(productId) {
        
        $.ajax({
            url: '{{ route('cart.removeItem') }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                product_id: productId
            },
            success: function(response) {
                console.log(response); // Log response data
                // alert('Product removed from cart.');
                $('#cart-item-count').text(response.cartItemCount);
                $('.mini-cart-count').text(response.cartItemCount); // Update mini cart count
                $('.mini-cart-items .mini-cart__product[data-product-id="' + productId + '"]').remove();
            },
            error: function(xhr) {
                alert('Failed to remove product from cart.');
            }
        });
        $.ajax({
        url: '{{ route('cart.updateTotal') }}',
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
        },
        success: function(response) {
            console.log(response.total); // Log response data
            console.log(response); // Log response data
            $('#cart-total').text('$' + response.total); // Update cart total
        },
        error: function(xhr) {
            alert('Failed to update total.');
        }
    });
    }


        function showAlert(message) {
        var alertDiv = $('<div class="alert alert-success"></div>').text(message).hide().fadeIn(500);
        $('body').append(alertDiv);

        console.log('Alert Div:', alertDiv); // Debugging step to check if the div is created

        setTimeout(function() {
            alertDiv.fadeOut(500, function() {
            $(this).remove();
            });
        }, 4000);
        }

        // // Function to update modal content
        // function updateProductModal(product) {
        // $('#product-modal-title').text(product.name);
        // $('#product-modal-price').text(`$${product.price}`);
        // $('#product-modal-old-price').text(`$${product.oldPrice}`);
        // $('#product-modal-description').text(product.description);
        // $('#product-modal-img').attr('src', product.image);
        // $('#product-modal-link').attr('href', product.link);
        // $('#product-modal-badge').text(product.badge);
        // $('#product-modal-sku').text(product.sku);
        // $('#product-modal-category').text(product.category).attr('href', product.categoryLink);
        // }

        // // Example product data
        // const productData = {
        // name: 'Waxed-effect pleated skirt',
        // price: 49.00,
        // oldPrice: 60.00,
        // description: 'Donec accu.',
        // image: 'user_assets/img/products/prod-9-1.jpg',
        // link: 'product-details.html',
        // badge: 'sale',
        // sku: 'REF. LA-887',
        // category: 'Fashions',
        // categoryLink: '/shop-sidebar' // Adjust the link as needed
        // };

        // // Trigger modal and update content
        // $('#productModal').on('show.bs.modal', function (event) {
        // var button = $(event.relatedTarget);
        // var product = productData; // Replace with the actual product data
        // updateProductModal(product);
        // });

        $('#productModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var productId = button.data('product-id');

        // AJAX request to fetch product data from the server
        $.ajax({
            url: '{{ route('getProductData') }}', // Update with your API endpoint
            type: 'GET',
            data: { id: productId },
            success: function(product) {
            // Update the modal with the fetched product data
            $('#product-modal-title').text(product.name);
            
            $('#product-modal-description').text(product.description);
            $('#product-modal-img').attr('src', 'storage/'+product.images[0]);
            $('#product-modal-link').attr('href', product.link);
            $('#product-modal-category').text(product.category).attr('href', product.categoryLink);
            $('#add_to_cart').attr('data-product-id', productId);
            $('#add_to_cart').attr('data-product-name', product.name);
            $('#qty').val(1);



            // Conditionally display price and old price
            if (product.price_after_discount) {
                $('#product-modal-price').html(`${product.price_after_discount}JD`);
                $('#product-modal-old-price').html(`${product.price}JD`).show();
            } else {
                $('#product-modal-price').html(`${product.price}JD`);
                $('#product-modal-old-price').hide();
            }
            },
            error: function(xhr, status, error) {
            console.error('Error fetching product data:', error);
            }
        });

        



        });

});






    </script>
    

    
    
    
</body>

</html>