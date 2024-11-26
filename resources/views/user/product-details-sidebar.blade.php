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
    <link rel="stylesheet" href="user_assets/css/bootstrap.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="user_assets/css/font-awesome.min.css">

    <!-- dl Icon CSS -->
    <link rel="stylesheet" href="user_assets/css/dl-icon.css">

    <!-- All Plugins CSS -->
    <link rel="stylesheet" href="user_assets/css/plugins.css">

    <!-- Revoulation Slider CSS  -->
    <link rel="stylesheet" href="user_assets/css/revoulation.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="user_assets/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="user_assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
    <div class="wrapper">
        <!-- Header Area Start -->
        @include('user.layouts.inc.nav-bar')
        <!-- Header Area End -->

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area pt--70 pt-md--25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop-sidebar.html">Shop Pages</a></li>
                            <li class="current"><span>Product Details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner enable-full-width enable-page-sidebar">
                <div class="container-fluid">
                    <div class="row shop-sidebar pt--40">
                        <div class="col-lg-9 order-lg-2" id="main-content">
                            <div class="row">
                                <div class="col-md-6 product-main-image">
                                    <div class="product-image">
                                        <div class="product-gallery vertical-slide-nav">
                                            <div class="product-gallery__thumb">
                                                <div class="product-gallery__thumb--image">
                                                    <div class="airi-element-carousel nav-slider slick-vertical" 
                                                    data-slick-options='{
                                                        "slidesToShow": 3,
                                                        "slidesToScroll": 1,
                                                        "vertical": true,
                                                        "swipe": true,
                                                        "verticalSwiping": true,
                                                        "infinite": true,
                                                        "focusOnSelect": true,
                                                        "asNavFor": ".main-slider",
                                                        "arrows": true, 
                                                        "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-up" },
                                                        "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-down" }
                                                    }'
                                                    data-slick-responsive='[
                                                        {
                                                            "breakpoint":992, 
                                                            "settings": {
                                                                "slidesToShow": 4,
                                                                "vertical": false,
                                                                "verticalSwiping": false
                                                            } 
                                                        },
                                                        {
                                                            "breakpoint":575, 
                                                            "settings": {
                                                                "slidesToShow": 3,
                                                                "vertical": false,
                                                                "verticalSwiping": false
                                                            } 
                                                        },
                                                        {
                                                            "breakpoint":480, 
                                                            "settings": {
                                                                "slidesToShow": 2,
                                                                "vertical": false,
                                                                "verticalSwiping": false
                                                            } 
                                                        }
                                                    ]'>
                                                        <figure class="product-gallery__thumb--single">
                                                            <img src="user_assets/img/products/prod-19-1-2.jpg" alt="Products">
                                                        </figure>
                                                        <figure class="product-gallery__thumb--single">
                                                            <img src="user_assets/img/products/prod-19-2-2.jpg" alt="Products">
                                                        </figure>
                                                        <figure class="product-gallery__thumb--single">
                                                            <img src="user_assets/img/products/prod-19-3-2.jpg" alt="Products">
                                                        </figure>
                                                        <figure class="product-gallery__thumb--single">
                                                            <img src="user_assets/img/products/prod-19-4-2.jpg" alt="Products">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-gallery__large-image">
                                                <div class="gallery-with-thumbs">
                                                    <div class="product-gallery__wrapper">
                                                        <div class="airi-element-carousel main-slider product-gallery__full-image image-popup"
                                                        data-slick-options='{
                                                            "slidesToShow": 1,
                                                            "slidesToScroll": 1,
                                                            "infinite": true,
                                                            "arrows": false, 
                                                            "asNavFor": ".nav-slider"
                                                        }'>
                                                            <figure class="product-gallery__image zoom">
                                                                <img src="user_assets/img/products/prod-19-1-big.jpg" alt="Product">
                                                            </figure>
                                                            <figure class="product-gallery__image zoom">
                                                                <img src="user_assets/img/products/prod-19-2-big.jpg" alt="Product">
                                                            </figure>
                                                            <figure class="product-gallery__image zoom">
                                                                <img src="user_assets/img/products/prod-19-3-big.jpg" alt="Product">
                                                            </figure>
                                                            <figure class="product-gallery__image zoom">
                                                                <img src="user_assets/img/products/prod-19-4-big.jpg" alt="Product">
                                                            </figure>
                                                        </div>
                                                        <div class="product-gallery__actions">
                                                            <button class="action-btn btn-zoom-popup"><i
                                                                    class="dl-icon-zoom-in"></i></button>
                                                            <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM"
                                                                class="action-btn video-popup"><i
                                                                    class="dl-icon-format-video"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-badge new">New</span>
                                    </div>
                                </div>
                                <div class="col-md-6 product-main-details mt--40 mt-md--10 mt-sm--30">
                                    <div class="product-summary">
                                        <div class="product-rating float-left">
                                            <span>
                                                <i class="dl-icon-star rated"></i>
                                                <i class="dl-icon-star rated"></i>
                                                <i class="dl-icon-star rated"></i>
                                                <i class="dl-icon-star rated"></i>
                                                <i class="dl-icon-star rated"></i>
                                            </span>
                                            <a href="" class="review-link">(1 customer review)</a>
                                        </div>
                                        <div class="product-navigation">
                                            <a href="#" class="prev"><i class="dl-icon-left"></i></a>
                                            <a href="#" class="next"><i class="dl-icon-right"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                        <h3 class="product-title">Waxed-effect pleated skirt</h3>
                                        <span class="product-stock in-stock float-right">
                                            <i class="dl-icon-check-circle1"></i>
                                            in stock
                                        </span>
                                        <div class="product-price-wrapper mb--40 mb-md--10">
                                            <span class="money">$49.00</span>
                                            <span class="old-price">
                                                <span class="money">$60.00</span>
                                            </span>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="product-short-description mb--45 mb-sm--20">Donec accumsan auctor
                                            iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex
                                            maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis
                                            pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat
                                            tellus at, hendrerit arcu.</p>
                                        <form action="#" class="form--action mb--30 mb-sm--20">
                                            <div class="product-action flex-row align-items-center">
                                                <div class="quantity">
                                                    <input type="number" class="quantity-input" name="qty" id="qty"
                                                        value="1" min="1">
                                                </div>
                                                <button type="button" class="btn btn-style-1 btn-large add-to-cart">
                                                    Add To Cart
                                                </button>
                                                <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                                                <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                                            </div>
                                        </form>
                                        <div class="product-extra mb--40 mb-sm--20">
                                            <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store
                                                near you</a>
                                            <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and
                                                return</a>
                                        </div>
                                        <div
                                            class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column">
                                            <div class="product-meta">
                                                <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF.
                                                        LA-887</span></span>
                                                <span class="posted_in font-size-12">Categories:
                                                    <a href="shop-sidebar.html">Fashions</a>
                                                </span>
                                                <span class="posted_in font-size-12">Tags:
                                                    <a href="shop-sidebar.html">dress,</a>
                                                    <a href="shop-sidebar.html">fashions,</a>
                                                    <a href="shop-sidebar.html">women</a>
                                                </span>
                                            </div>
                                            <div class="product-share-box">
                                                <span class="font-size-12">Share With</span>
                                                <!-- Social Icons Start Here -->
                                                <ul class="social social-small">
                                                    <li class="social__item">
                                                        <a href="https://facebook.com" class="social__link">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
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
                                                        <a href="https://plus.google.com" class="social__link">
                                                            <i class="fa fa-pinterest-p"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- Social Icons End Here -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-cente pt--45 pt-lg--50 pt-md--55 pt-sm--35">
                                <div class="col-12">
                                    <div class="product-data-tab tab-style-1">
                                        <div class="nav nav-tabs product-data-tab__head mb--40 mb-md--30"
                                            id="product-tab" role="tablist">
                                            <button type="button" class="product-data-tab__link nav-link active" id="nav-description-tab"
                                                data-bs-toggle="tab" data-bs-target="#nav-description" role="tab" aria-selected="true">
                                                <span>Description</span>
                                            </button>
                                            <button type="button" class="product-data-tab__link nav-link" id="nav-reviews-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-reviews" role="tab" aria-selected="true">
                                                <span>Reviews(1)</span>
                                            </button>
                                        </div>
                                        <div class="tab-content product-data-tab__content" id="product-tabContent">
                                            <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                                aria-labelledby="nav-description-tab">
                                                <div class="product-description">
                                                    <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at
                                                        egestas magna molestie a. Proin ac ex maximus, ultrices justo
                                                        eget, sodales orci. Aliquam egestas libero ac turpis pharetra,
                                                        in vehicula lacus scelerisque. Vestibulum ut sem laoreet,
                                                        feugiat tellus at, hendrerit arcu.

                                                        <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi.
                                                            Maecenas eu ante a elit tempus fermentum. Aliquam commodo
                                                            tincidunt semper. Phasellus accumsan, justo ac mollis
                                                            pharetra, ex dui pharetra nisl, a scelerisque ipsum nulla ac
                                                            sem. Cras eu risus urna. Duis lorem sapien, congue eget nisl
                                                            sit amet, rutrum faucibus elit.</p>

                                                        <ul>
                                                            <li>Maecenas eu ante a elit tempus fermentum. Aliquam
                                                                commodo tincidunt semper</li>
                                                            <li>Aliquam est et tempus. Eaecenas libero ante, tincidunt
                                                                vel</li>
                                                        </ul>

                                                        <p>Curabitur sodales euismod nibh. Sed iaculis sed orci eget
                                                            semper. Nam auctor, augue et eleifend tincidunt, felis
                                                            mauris convallis neque, in placerat metus urna laoreet diam.
                                                            Morbi sagittis facilisis arcu sed ornare. Maecenas dictum
                                                            urna ut facilisis rhoncus.iaculis sed orci eget semper. Nam
                                                            auctor, augue et eleifend tincidunt, felis mauris</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-reviews" role="tabpanel"
                                                aria-labelledby="nav-reviews-tab">
                                                <div class="product-reviews">
                                                    <h3 class="review__title">1 review for Waxed-effect pleated skirt
                                                    </h3>
                                                    <ul class="review__list">
                                                        <li class="review__item">
                                                            <div class="review__container">
                                                                <img src="user_assets/img/others/comment-icon-2.png"
                                                                    alt="Review Avatar" class="review__avatar">
                                                                <div class="review__text">
                                                                    <div class="product-rating float-right">
                                                                        <span>
                                                                            <i class="dl-icon-star rated"></i>
                                                                            <i class="dl-icon-star rated"></i>
                                                                            <i class="dl-icon-star rated"></i>
                                                                            <i class="dl-icon-star rated"></i>
                                                                            <i class="dl-icon-star rated"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="review__meta">
                                                                        <strong class="review__author">John Snow
                                                                        </strong>
                                                                        <span class="review__dash">-</span>
                                                                        <span class="review__published-date">November
                                                                            20, 2018</span>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <p class="review__description">Aliquam egestas
                                                                        libero ac turpis pharetra, in vehicula lacus
                                                                        scelerisque. Vestibulum ut sem laoreet, feugiat
                                                                        tellus at, hendrerit arcu.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="review-form-wrapper">
                                                        <span class="reply-title"><strong>Add a review</strong></span>
                                                        <form action="#" class="form">
                                                            <div class="form-notes mb--20">
                                                                <p>Your email address will not be published. Required
                                                                    fields are marked <span class="required">*</span>
                                                                </p>
                                                            </div>
                                                            <div class="form__group mb--30 mb-sm--20">
                                                                <div class="revew__rating">
                                                                    <p class="stars selected">
                                                                        <a class="star-1 active" href="#">1</a>
                                                                        <a class="star-2" href="#">2</a>
                                                                        <a class="star-3" href="#">3</a>
                                                                        <a class="star-4" href="#">4</a>
                                                                        <a class="star-5" href="#">5</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="form__group mb--30 mb-sm--20">
                                                                <div class="row">
                                                                    <div class="col-sm-6 mb-sm--20">
                                                                        <label class="form__label" for="name">Name<span
                                                                                class="required">*</span></label>
                                                                        <input type="text" name="name" id="name"
                                                                            class="form__input">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label class="form__label"
                                                                            for="email">email<span
                                                                                class="required">*</span></label>
                                                                        <input type="email" name="email" id="email"
                                                                            class="form__input">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form__group mb--30 mb-sm--20">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <label class="form__label" for="email">Your
                                                                            Review<span
                                                                                class="required">*</span></label>
                                                                        <textarea name="review" id="review"
                                                                            class="form__input form__input--textarea"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form__group">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <input type="submit" value="Submit"
                                                                            class="btn btn-style-1 btn-submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt--65 pt-md--45 pt-sm--25 pb--35 pb-md--25 pb-sm--15">
                                <div class="col-12">
                                    <div class="row mb--40 mb-md--30">
                                        <div class="col-12 text-center">
                                            <h2 class="heading-secondary">Up-Sells Products</h2>
                                            <hr class="separator center mt--25 mt-md--15">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="airi-element-carousel product-carousel nav-vertical-center"
                                                data-slick-options='{
                                    "spaceBetween": 30,
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "arrows": true, 
                                    "prevArrow": "dl-icon-left", 
                                    "nextArrow": "dl-icon-right" 
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":450, "settings": {"slidesToShow": 1} }
                                    ]'>
                                                <div class="airi-product">
                                                    <div class="product-inner">
                                                        <figure class="product-image">
                                                            <div class="product-image--holder">
                                                                <a href="product-details.html">
                                                                    <img src="user_assets/img/products/prod-8-2.jpg"
                                                                        alt="Product Image" class="primary-image">
                                                                    <img src="user_assets/img/products/prod-8-1.jpg"
                                                                        alt="Product Image" class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="airi-product-action">
                                                                <div class="product-action">
                                                                    <a class="quickview-btn action-btn"
                                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                                        title="Quick Shop">
                                                                        <span data-bs-toggle="modal"
                                                                            data-bs-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add_to_cart_btn action-btn"
                                                                        href="cart.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Cart">
                                                                        <i class="dl-icon-cart29"></i>
                                                                    </a>
                                                                    <a class="add_wishlist action-btn"
                                                                        href="wishlist.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Wishlist">
                                                                        <i class="dl-icon-heart4"></i>
                                                                    </a>
                                                                    <a class="add_compare action-btn"
                                                                        href="compare.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Compare">
                                                                        <i class="dl-icon-compare"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="product-info text-center">
                                                            <h3 class="product-title">
                                                                <a href="product-details.html">Polka dot blouse</a>
                                                            </h3>
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="airi-product">
                                                    <div class="product-inner">
                                                        <figure class="product-image">
                                                            <div class="product-image--holder">
                                                                <a href="product-details.html">
                                                                    <img src="user_assets/img/products/prod-3-2.jpg"
                                                                        alt="Product Image" class="primary-image">
                                                                    <img src="user_assets/img/products/prod-3-3.jpg"
                                                                        alt="Product Image" class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="airi-product-action">
                                                                <div class="product-action">
                                                                    <a class="quickview-btn action-btn"
                                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                                        title="Quick Shop">
                                                                        <span data-bs-toggle="modal"
                                                                            data-bs-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add_to_cart_btn action-btn"
                                                                        href="cart.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Cart">
                                                                        <i class="dl-icon-cart29"></i>
                                                                    </a>
                                                                    <a class="add_wishlist action-btn"
                                                                        href="wishlist.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Wishlist">
                                                                        <i class="dl-icon-heart4"></i>
                                                                    </a>
                                                                    <a class="add_compare action-btn"
                                                                        href="compare.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Compare">
                                                                        <i class="dl-icon-compare"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="product-info text-center">
                                                            <h3 class="product-title">
                                                                <a href="product-details.html">Dotted mesh blouse</a>
                                                            </h3>
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="airi-product">
                                                    <div class="product-inner">
                                                        <figure class="product-image">
                                                            <div class="product-image--holder">
                                                                <a href="product-details.html">
                                                                    <img src="user_assets/img/products/prod-1-1.jpg"
                                                                        alt="Product Image" class="primary-image">
                                                                    <img src="user_assets/img/products/prod-1-4.jpg"
                                                                        alt="Product Image" class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="airi-product-action">
                                                                <div class="product-action">
                                                                    <a class="quickview-btn action-btn"
                                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                                        title="Quick Shop">
                                                                        <span data-bs-toggle="modal"
                                                                            data-bs-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add_to_cart_btn action-btn"
                                                                        href="cart.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Cart">
                                                                        <i class="dl-icon-cart29"></i>
                                                                    </a>
                                                                    <a class="add_wishlist action-btn"
                                                                        href="wishlist.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Wishlist">
                                                                        <i class="dl-icon-heart4"></i>
                                                                    </a>
                                                                    <a class="add_compare action-btn"
                                                                        href="compare.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Compare">
                                                                        <i class="dl-icon-compare"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="product-info text-center">
                                                            <h3 class="product-title">
                                                                <a href="product-details.html">Ruffled polka dot
                                                                    blouse</a>
                                                            </h3>
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="airi-product">
                                                    <div class="product-inner">
                                                        <figure class="product-image">
                                                            <div class="product-image--holder">
                                                                <a href="product-details.html">
                                                                    <img src="user_assets/img/products/prod-20-1.jpg"
                                                                        alt="Product Image" class="primary-image">
                                                                    <img src="user_assets/img/products/prod-20-2.jpg"
                                                                        alt="Product Image" class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="airi-product-action">
                                                                <div class="product-action">
                                                                    <a class="quickview-btn action-btn"
                                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                                        title="Quick Shop">
                                                                        <span data-bs-toggle="modal"
                                                                            data-bs-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add_to_cart_btn action-btn"
                                                                        href="cart.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Cart">
                                                                        <i class="dl-icon-cart29"></i>
                                                                    </a>
                                                                    <a class="add_wishlist action-btn"
                                                                        href="wishlist.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Wishlist">
                                                                        <i class="dl-icon-heart4"></i>
                                                                    </a>
                                                                    <a class="add_compare action-btn"
                                                                        href="compare.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Compare">
                                                                        <i class="dl-icon-compare"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <span class="product-badge sale">Sale</span>
                                                        </figure>
                                                        <div class="product-info text-center">
                                                            <h3 class="product-title">
                                                                <a href="product-details.html">Limited edition v-neck
                                                                    t-shirt</a>
                                                            </h3>
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt--35 pt-md--25 pt-sm--15 pb--75 pb-md--40">
                                <div class="col-12">
                                    <div class="row mb--40 mb-md--30">
                                        <div class="col-12 text-center">
                                            <h2 class="heading-secondary">Related Products</h2>
                                            <hr class="separator center mt--25 mt-md--15">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="airi-element-carousel product-carousel nav-vertical-center"
                                                data-slick-options='{
                                    "spaceBetween": 30,
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "arrows": true, 
                                    "prevArrow": "dl-icon-left", 
                                    "nextArrow": "dl-icon-right" 
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":450, "settings": {"slidesToShow": 1} }
                                    ]'>
                                                <div class="airi-product">
                                                    <div class="product-inner">
                                                        <figure class="product-image">
                                                            <div class="product-image--holder">
                                                                <a href="product-details.html">
                                                                    <img src="user_assets/img/products/prod-12-1.jpg"
                                                                        alt="Product Image" class="primary-image">
                                                                    <img src="user_assets/img/products/prod-12-4.jpg"
                                                                        alt="Product Image" class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="airi-product-action">
                                                                <div class="product-action">
                                                                    <a class="quickview-btn action-btn"
                                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                                        title="Quick Shop">
                                                                        <span data-bs-toggle="modal"
                                                                            data-bs-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add_to_cart_btn action-btn"
                                                                        href="cart.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Cart">
                                                                        <i class="dl-icon-cart29"></i>
                                                                    </a>
                                                                    <a class="add_wishlist action-btn"
                                                                        href="wishlist.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Wishlist">
                                                                        <i class="dl-icon-heart4"></i>
                                                                    </a>
                                                                    <a class="add_compare action-btn"
                                                                        href="compare.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Compare">
                                                                        <i class="dl-icon-compare"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="product-info text-center">
                                                            <h3 class="product-title">
                                                                <a href="product-details.html">Open sweatshirt</a>
                                                            </h3>
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="airi-product">
                                                    <div class="product-inner">
                                                        <figure class="product-image">
                                                            <div class="product-image--holder">
                                                                <a href="product-details.html">
                                                                    <img src="user_assets/img/products/prod-5-3.jpg"
                                                                        alt="Product Image" class="primary-image">
                                                                    <img src="user_assets/img/products/prod-5-4.jpg"
                                                                        alt="Product Image" class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="airi-product-action">
                                                                <div class="product-action">
                                                                    <a class="quickview-btn action-btn"
                                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                                        title="Quick Shop">
                                                                        <span data-bs-toggle="modal"
                                                                            data-bs-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add_to_cart_btn action-btn"
                                                                        href="cart.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Cart">
                                                                        <i class="dl-icon-cart29"></i>
                                                                    </a>
                                                                    <a class="add_wishlist action-btn"
                                                                        href="wishlist.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Wishlist">
                                                                        <i class="dl-icon-heart4"></i>
                                                                    </a>
                                                                    <a class="add_compare action-btn"
                                                                        href="compare.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Compare">
                                                                        <i class="dl-icon-compare"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="product-info text-center">
                                                            <h3 class="product-title">
                                                                <a href="product-details.html">Split suede handbag</a>
                                                            </h3>
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="airi-product">
                                                    <div class="product-inner">
                                                        <figure class="product-image">
                                                            <div class="product-image--holder">
                                                                <a href="product-details.html">
                                                                    <img src="user_assets/img/products/prod-14-2.jpg"
                                                                        alt="Product Image" class="primary-image">
                                                                    <img src="user_assets/img/products/prod-14-1.jpg"
                                                                        alt="Product Image" class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="airi-product-action">
                                                                <div class="product-action">
                                                                    <a class="quickview-btn action-btn"
                                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                                        title="Quick Shop">
                                                                        <span data-bs-toggle="modal"
                                                                            data-bs-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add_to_cart_btn action-btn"
                                                                        href="cart.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Cart">
                                                                        <i class="dl-icon-cart29"></i>
                                                                    </a>
                                                                    <a class="add_wishlist action-btn"
                                                                        href="wishlist.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Wishlist">
                                                                        <i class="dl-icon-heart4"></i>
                                                                    </a>
                                                                    <a class="add_compare action-btn"
                                                                        href="compare.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Compare">
                                                                        <i class="dl-icon-compare"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="product-info text-center">
                                                            <h3 class="product-title">
                                                                <a href="product-details.html">Super skinny blazer</a>
                                                            </h3>
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="airi-product">
                                                    <div class="product-inner">
                                                        <figure class="product-image">
                                                            <div class="product-image--holder">
                                                                <a href="product-details.html">
                                                                    <img src="user_assets/img/products/prod-7-2.jpg"
                                                                        alt="Product Image" class="primary-image">
                                                                    <img src="user_assets/img/products/prod-7-1.jpg"
                                                                        alt="Product Image" class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="airi-product-action">
                                                                <div class="product-action">
                                                                    <a class="quickview-btn action-btn"
                                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                                        title="Quick Shop">
                                                                        <span data-bs-toggle="modal"
                                                                            data-bs-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add_to_cart_btn action-btn"
                                                                        href="cart.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Cart">
                                                                        <i class="dl-icon-cart29"></i>
                                                                    </a>
                                                                    <a class="add_wishlist action-btn"
                                                                        href="wishlist.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Wishlist">
                                                                        <i class="dl-icon-heart4"></i>
                                                                    </a>
                                                                    <a class="add_compare action-btn"
                                                                        href="compare.html" data-bs-toggle="tooltip"
                                                                        data-bs-placement="left" title="Add to Compare">
                                                                        <i class="dl-icon-compare"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <span class="product-badge sale">Sale</span>
                                                        </figure>
                                                        <div class="product-info text-center">
                                                            <h3 class="product-title">
                                                                <a href="product-details.html">Leopard print satin
                                                                    shirt</a>
                                                            </h3>
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 order-lg-1" id="primary-sidebar">
                            <div class="sidebar-widget">
                                <!-- Category Widget Start -->
                                <div class="product-widget categroy-widget mb--35 mb-md--30">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul class="prouduct-categories product-widget__list">
                                        <li><a href="">Accessories</a><span class="count">(0)</span></li>
                                        <li><a href="">Brands</a><span class="count">(0)</span></li>
                                        <li><a href="">Clothing</a><span class="count">(1)</span></li>
                                        <li><a href="">Fashions</a><span class="count">(21)</span></li>
                                        <li><a href="">Furniture</a><span class="count">(20)</span></li>
                                        <li><a href="">Gifts</a><span class="count">(0)</span></li>
                                        <li><a href="">Kids</a><span class="count">(0)</span></li>
                                        <li><a href="">Men</a><span class="count">(0)</span></li>
                                        <li><a href="">New in</a><span class="count">(0)</span></li>
                                        <li><a href="">Outlet</a><span class="count">(0)</span></li>
                                        <li><a href="">Shoes</a><span class="count">(0)</span></li>
                                        <li><a href="">Wallets</a><span class="count">(0)</span></li>
                                        <li><a href="">Women</a><span class="count">(0)</span></li>
                                    </ul>
                                </div>
                                <!-- Category Widget Start -->

                                <!-- Price Filter Widget Start -->
                                <div class="product-widget product-price-widget mb--40 mb-md--35">
                                    <h3 class="widget-title">Price</h3>
                                    <div class="widget_content">
                                        <form action="#" method="post">
                                            <div id="slider-range"
                                                class="price-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                <div class="ui-slider-range ui-widget-header ui-corner-all">

                                                </div>
                                                <span class="ui-slider-handle ui-state-default ui-corner-all"
                                                    tabindex="0">

                                                </span>
                                                <span class="ui-slider-handle ui-state-default ui-corner-all"
                                                    tabindex="0">

                                                </span>
                                            </div>
                                            <div class="filter-price">
                                                <div class="filter-price__count">
                                                    <div class="filter-price__input-group mb--20">
                                                        <span>Price: </span>
                                                        <input type="text" id="amount" class="amount-range" readonly="">
                                                    </div>
                                                    <button type="submit" class="btn btn-style-1 sidebar-btn">
                                                        filter
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Price Filter Widget End -->

                                <!-- Product Size Widget Start -->
                                <div class="product-widget product-widget--size mb--25 mb-md--20">
                                    <h3 class="widget-title">Size</h3>
                                    <ul class="product-widget__list two-column-list">
                                        <li><a href="shop-sidebar.html">L</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">S</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">XXl</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">M</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">XL</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">L</a><span class="count">(2)</span></li>
                                    </ul>
                                </div>
                                <!-- Product Size Widget End -->

                                <!-- Product Color Widget Start -->
                                <div class="product-widget product-widget--Color mb--25 mb-md--20">
                                    <h3 class="widget-title">Color</h3>
                                    <ul class="product-widget__list two-column-list">
                                        <li><a href="shop-sidebar.html">Blue</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Pink</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">White</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Green</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Red</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Black</a><span class="count">(2)</span></li>
                                    </ul>
                                </div>
                                <!-- Product Color Widget End -->

                                <!-- Product Brand Widget Start -->
                                <div class="product-widget product-widget--brand mb--40 mb-md--30">
                                    <h3 class="widget-title">Brands</h3>
                                    <ul class="product-widget__list">
                                        <li><a href="shop-sidebar.html">Airi</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Mango</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Valention</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Zara</a><span class="count">(2)</span></li>
                                    </ul>
                                </div>
                                <!-- Product Brand Widget End -->

                                <!-- Category Widget Start -->
                                <div class="product-widget tag-widget mb--35 mb-md--30">
                                    <h3 class="widget-title">Categories</h3>
                                    <div class="tagcloud">
                                        <a href="shop-sidebar.html">chair</a>
                                        <a href="shop-sidebar.html">deco</a>
                                        <a href="shop-sidebar.html">dress</a>
                                        <a href="shop-sidebar.html">fashion</a>
                                        <a href="shop-sidebar.html">furniture</a>
                                        <a href="shop-sidebar.html">light</a>
                                        <a href="shop-sidebar.html">living</a>
                                        <a href="shop-sidebar.html">sofa</a>
                                        <a href="shop-sidebar.html">table</a>
                                        <a href="shop-sidebar.html">women</a>
                                    </div>
                                </div>
                                <!-- Category Widget Start -->

                                <!-- Promo Widget Start -->
                                <div class="product-widget promo-widget">
                                    <div class="banner-box banner-type-3 banner-type-3-2 banner-hover-1">
                                        <div class="banner-inner">
                                            <div class="banner-image">
                                                <img src="user_assets/img/banner/ad-banner.jpg" alt="Banner">
                                            </div>
                                            <div class="banner-info">
                                                <h2 class="banner-title-11">New <br> <strong>Season</strong></h2>
                                            </div>
                                            <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Promo Widget End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->


        <!-- Footer Start -->
        <footer class="footer footer-3 bg--white border-top">
            <div class="container">
                <div class="row pt--40 pt-md--30 mb--40 mb-sm--30">
                    <div class="col-12 text-md-center">
                        <div class="footer-widget">
                            <div class="textwidget">
                                <a href="index.html" class="footer-logo">
                                    <img src="user_assets/img/logo/logo.svg" alt="Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb--15 mb-sm--20">
                    <div class="col-xl-2 col-md-4 mb-lg--30">
                        <div class="footer-widget">
                            <h3 class="widget-title widget-title--2">Company</h3>
                            <ul class="widget-menu widget-menu--2">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="">Our Services</a></li>
                                <li><a href="">Affiliate Program</a></li>
                                <li><a href="">Work for Airi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-lg--30">
                        <div class="footer-widget">
                            <h3 class="widget-title widget-title--2">USEFUL LINKS</h3>
                            <ul class="widget-menu widget-menu--2">
                                <li><a href="shop-collections.html">The Collections</a></li>
                                <li><a href="">Size Guide</a></li>
                                <li><a href="">Return Policiy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-lg--30">
                        <div class="footer-widget">
                            <h3 class="widget-title widget-title--2">SHOPPING</h3>
                            <ul class="widget-menu widget-menu--2">
                                <li><a href="shop-instagram.html">Look Book</a></li>
                                <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                <li><a href="shop-no-gutter.html">Man & Woman</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <div class="footer-widget">
                            <h3 class="widget-title widget-title--2 widget-title--icon">Subscribe now and get 10% off
                                new collection</h3>
                            <form
                                action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a"
                                class="newsletter-form newsletter-form--3 mc-form" method="post" target="_blank">
                                <input type="email" name="newsletter-email" id="newsletter-email"
                                    class="newsletter-form__input" placeholder="Enter Your Email Address..">
                                <button type="submit" class="newsletter-form__submit">
                                    <i class="dl-icon-right"></i>
                                </button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
                <div class="row align-items-center pt--10 pb--30">
                    <div class="col-md-4">
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
                    <div class="col-md-4 text-md-center">
                        <p class="copyright-text">&copy; AIRI 2021 MADE WITH <i class="fa fa-heart"></i> BY HASTHEMES</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <img src="user_assets/img/others/payments-2.png" alt="Payment">
                    </div>
                </div>
            </div>
        </footer>
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
                                <img src="user_assets/img/others/payments.png" alt="payment">
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
        <aside class="mini-cart" id="miniCart">
            <div class="mini-cart-wrapper">
                <a href="" class="btn-close"><i class="dl-icon-close"></i></a>
                <div class="mini-cart-inner">
                    <h5 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h5>
                    <div class="mini-cart__content">
                        <ul class="mini-cart__list">
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="user_assets/img/products/prod-17-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Chain print bermuda
                                        shorts </a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="user_assets/img/products/prod-18-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect
                                        pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="user_assets/img/products/prod-19-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect
                                        pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="user_assets/img/products/prod-2-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect
                                        pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                        </ul>
                        <div class="mini-cart__total">
                            <span>Subtotal</span>
                            <span class="ammount">$98.00</span>
                        </div>
                        <div class="mini-cart__buttons">
                            <a href="cart.html" class="btn btn-fullwidth btn-style-1">View Cart</a>
                            <a href="checkout.html" class="btn btn-fullwidth btn-style-1">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
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
                                <div class="airi-element-carousel product-image-carousel nav-vertical-center nav-style-1"
                                    data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "dl-icon-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "dl-icon-right" }
                                }'>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="user_assets/img/products/prod-9-1.jpg" alt="Product Image"
                                                    class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge sale">sale</span>
                                    </div>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="user_assets/img/products/prod-10-1.jpg" alt="Product Image"
                                                    class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge new">new</span>
                                    </div>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="user_assets/img/products/prod-11-1.jpg" alt="Product Image"
                                                    class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge hot">hot</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-box product-summary">
                                    <div class="product-navigation mb--10">
                                        <a href="#" class="prev"><i class="dl-icon-left"></i></a>
                                        <a href="#" class="next"><i class="dl-icon-right"></i></a>
                                    </div>
                                    <h3 class="product-title mb--15">Waxed-effect pleated skirt</h3>
                                    <span class="product-price-wrapper mb--20">
                                        <span class="money">$49.00</span>
                                        <span class="product-price-old">
                                            <span class="money">$60.00</span>
                                        </span>
                                    </span>
                                    <p class="product-short-description mb--25 mb-md--20">Donec accumsan auctor iaculis.
                                        Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus,
                                        ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in
                                        vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at,
                                        hendrerit arcu.</p>
                                    <div class="product-action d-flex flex-row align-items-center mb--30 mb-md--20">
                                        <div class="quantity">
                                            <input type="number" class="quantity-input" name="qty" id="quick-qty"
                                                value="1" min="1">
                                        </div>
                                        <button type="button" class="btn btn-style-1 btn-semi-large add-to-cart"
                                            onclick="window.location.href='cart.html'">
                                            Add To Cart
                                        </button>
                                        <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                                        <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                                    </div>
                                    <div class="product-extra mb--30 mb-md--20">
                                        <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near
                                            you</a>
                                        <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and
                                            return</a>
                                    </div>
                                    <div
                                        class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column flex-sm-row flex-column">
                                        <div class="product-meta">
                                            <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF.
                                                    LA-887</span></span>
                                            <span class="posted_in font-size-12">Categories: <a href="shop-sidebar.html"
                                                    rel="tag">Fashions</a></span>
                                        </div>
                                        <div class="product-share-box">
                                            <span class="font-size-12">Share With</span>
                                            <!-- Social Icons Start Here -->
                                            <ul class="social social-small">
                                                <li class="social__item">
                                                    <a href="https://facebook.com" class="social__link">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
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
                                                    <a href="https://plus.google.com" class="social__link">
                                                        <i class="fa fa-pinterest-p"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- Social Icons End Here -->
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



    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="user_assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="user_assets/js/bootstrap.bundle.min.js"></script>

    <!-- All Plugins Js -->
    <script src="user_assets/js/plugins.js"></script>

    <!-- Ajax Mail Js -->
    <script src="user_assets/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="user_assets/js/main.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="user_assets/js/revoulation/jquery.themepunch.tools.min.js"></script>
    <script src="user_assets/js/revoulation/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="user_assets/js/revoulation/extensions/revolution.extension.actions.min.js"></script>
    <script src="user_assets/js/revoulation/extensions/revolution.extension.carousel.min.js"></script>
    <script src="user_assets/js/revoulation/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="user_assets/js/revoulation/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="user_assets/js/revoulation/extensions/revolution.extension.migration.min.js"></script>
    <script src="user_assets/js/revoulation/extensions/revolution.extension.navigation.min.js"></script>
    <script src="user_assets/js/revoulation/extensions/revolution.extension.parallax.min.js"></script>
    <script src="user_assets/js/revoulation/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="user_assets/js/revoulation/extensions/revolution.extension.video.min.js"></script>

    <!-- REVOLUTION ACTIVE JS FILES -->
    <script src="user_assets/js/revoulation.js"></script>

</body>

</html>