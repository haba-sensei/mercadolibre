<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="Admin HabaDash multiVentas">
        <meta name="author" content="HabaSensei">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('dist/images/fast-food.svg') }}" rel="shortcut icon">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
        <!-- Styles -->

        <link rel="stylesheet" href="{{ mix('dist/css/base_web.css') }}" />

        @livewireStyles

        <!-- Scripts -->



    </head>
    <body >

        <div class="ps-block--promotion-header bg--cover" style="background-image: url('{{ asset('dist/images/web/promotions/header-promotion.jpg') }}'); ">
            <div class="container">
                <div class="ps-block__left">
                    <h3>20%</h3>
                    <figure>
                        <p>Discount2</p>
                        <h4>For Books Of March</h4>
                    </figure>
                </div>
                <div class="ps-block__center">
                    <p>Enter Promotion<span>Sale2019</span></p>

                </div><a class="ps-btn ps-btn--sm" href="#">Shop now</a>
            </div>
        </div>

        <header class="header header--standard header--market-place-1" data-sticky="true">
            <div class="header__top">
                <div class="container">
                    <div class="header__left">
                        <p>Welcome to Martfury Online Shopping Store !</p>
                    </div>
                    <div class="header__right">
                        <ul class="header__top-links">
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Track Your Order</a></li>
                            <li>
                                <div class="ps-dropdown"><a href="#">US Dollar</a>
                                    <ul class="ps-dropdown-menu">
                                        <li><a href="#">Us Dollar</a></li>
                                        <li><a href="#">Euro</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="ps-dropdown language">
                                    <a href="#"><img src="{{ asset('dist/images/web/flag/en.png') }}" alt="">English</a>
                                    <ul class="ps-dropdown-menu">
                                        <li>
                                            <a href="#"><img src="{{ asset('dist/images/web/flag/germany.png') }}" alt=""> Germany</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('dist/images/web/flag/fr.png') }}" alt=""> France</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header__content">
                <div class="container">
                    <div class="header__content-left">
                        <div class="menu--product-categories">
                            <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                            <div class="menu__content">
                                <ul class="menu--dropdown">
                                    <li><a href="#"><i class="icon-star"></i> Hot Promotions</a>
                                    </li>
                                    <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-laundry"></i> Consumer Electronic</a>
                                        <div class="mega-menu">
                                            <div class="mega-menu__column">
                                                <h4>Electronic<span class="sub-toggle"></span></h4>
                                                <ul class="mega-menu__list">
                                                    <li><a href="#">Home Audio &amp; Theathers</a>
                                                    </li>
                                                    <li><a href="#">TV &amp; Videos</a>
                                                    </li>
                                                    <li><a href="#">Camera, Photos &amp; Videos</a>
                                                    </li>
                                                    <li><a href="#">Cellphones &amp; Accessories</a>
                                                    </li>
                                                    <li><a href="#">Headphones</a>
                                                    </li>
                                                    <li><a href="#">Videosgames</a>
                                                    </li>
                                                    <li><a href="#">Wireless Speakers</a>
                                                    </li>
                                                    <li><a href="#">Office Electronic</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu__column">
                                                <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                                <ul class="mega-menu__list">
                                                    <li><a href="#">Digital Cables</a>
                                                    </li>
                                                    <li><a href="#">Audio &amp; Video Cables</a>
                                                    </li>
                                                    <li><a href="#">Batteries</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><i class="icon-shirt"></i> Clothing &amp; Apparel</a>
                                    </li>
                                    <li><a href="#"><i class="icon-lampshade"></i> Home, Garden &amp; Kitchen</a>
                                    </li>
                                    <li><a href="#"><i class="icon-heart-pulse"></i> Health &amp; Beauty</a>
                                    </li>
                                    <li><a href="#"><i class="icon-diamond2"></i> Yewelry &amp; Watches</a>
                                    </li>
                                    <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-desktop"></i> Computer &amp; Technology</a>
                                        <div class="mega-menu">
                                            <div class="mega-menu__column">
                                                <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                                <ul class="mega-menu__list">
                                                    <li><a href="#">Computer &amp; Tablets</a>
                                                    </li>
                                                    <li><a href="#">Laptop</a>
                                                    </li>
                                                    <li><a href="#">Monitors</a>
                                                    </li>
                                                    <li><a href="#">Networking</a>
                                                    </li>
                                                    <li><a href="#">Drive &amp; Storages</a>
                                                    </li>
                                                    <li><a href="#">Computer Components</a>
                                                    </li>
                                                    <li><a href="#">Security &amp; Protection</a>
                                                    </li>
                                                    <li><a href="#">Gaming Laptop</a>
                                                    </li>
                                                    <li><a href="#">Accessories</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><i class="icon-baby-bottle"></i> Babies &amp; Moms</a>
                                    </li>
                                    <li><a href="#"><i class="icon-baseball"></i> Sport &amp; Outdoor</a>
                                    </li>
                                    <li><a href="#"><i class="icon-smartphone"></i> Phones &amp; Accessories</a>
                                    </li>
                                    <li><a href="#"><i class="icon-book2"></i> Books &amp; Office</a>
                                    </li>
                                    <li><a href="#"><i class="icon-car-siren"></i> Cars &amp; Motocycles</a>
                                    </li>
                                    <li><a href="#"><i class="icon-wrench"></i> Home Improments</a>
                                    </li>
                                    <li><a href="#"><i class="icon-tag"></i> Vouchers &amp; Services</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a class="ps-logo" href="index.html"><img src="{{ asset('dist/images/web/logo.png') }}" alt=""></a>
                    </div>
                    <div class="header__content-center">
                        <form class="ps-form--quick-search" action="index.html" method="get">
                            <div class="form-group--icon"><i class="icon-chevron-down"></i>
                                <select class="form-control">
                                    <option value="1">All</option>
                                    <option value="1">Smartphone</option>
                                    <option value="1">Sounds</option>
                                    <option value="1">Technology toys</option>
                                </select>
                            </div>
                            <input class="form-control" type="text" placeholder="I'm shopping for...">
                            <button>Search</button>
                        </form>
                    </div>
                    <div class="header__content-right">
                        <div class="header__actions"><a class="header__extra" href="#"><i class="icon-heart"></i><span><i>0</i></span></a>
                            <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                                <div class="ps-cart__content">
                                    <div class="ps-cart__items">
                                        <div class="ps-product--cart-mobile">
                                            <div class="ps-product__thumbnail">
                                                <a href="#"><img src="{{ asset('dist/images/web/products/clothing/7.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                                <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                            </div>
                                        </div>
                                        <div class="ps-product--cart-mobile">
                                            <div class="ps-product__thumbnail">
                                                <a href="#"><img src="{{ asset('dist/images/web/products/clothing/5.jpg') }} " alt=""></a>
                                            </div>
                                            <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                                <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-cart__footer">
                                        <h3>Sub Total:<strong>$59.99</strong></h3>
                                        <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                                    </div>
                                </div>
                            </div>

                            @auth
                            <div class="ps-block--user-header">
                                <div class="ps-block__left"><i class="icon-user"></i></div>
                                    <div class="ps-block__right">

                                        <a href="{{ route('dash') }}"  class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                                        Dashboard
                                        </a>
                                        <a href="{{ route('profile.show') }}"  class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                                        Perfil
                                        </a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"  class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                                                Cerrar
                                                </a>
                                            </form>
                                    </div>
                            </div>
                            @else
                            <div class="ps-block--user-header">
                                <div class="ps-block__left"><i class="icon-user"></i></div>
                                    <div class="ps-block__right">
                                        <a href="{{ route('login') }}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                                        Login
                                        </a>
                                        <a href="{{ route('register') }}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                                        Registro
                                        </a>
                                    </div>
                            </div>
                           @endauth


                        </div>
                    </div>
                </div>
            </div>
            <nav class="navigation">
                <div class="container">
                    <div class="navigation__left">
                        <div class="menu--product-categories">
                            <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                            <div class="menu__content">
                                <ul class="menu--dropdown">
                                    <li><a href="#"><i class="icon-star"></i> Hot Promotions</a>
                                    </li>
                                    <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-laundry"></i> Consumer Electronic</a>
                                        <div class="mega-menu">
                                            <div class="mega-menu__column">
                                                <h4>Electronic<span class="sub-toggle"></span></h4>
                                                <ul class="mega-menu__list">
                                                    <li><a href="#">Home Audio &amp; Theathers</a>
                                                    </li>
                                                    <li><a href="#">TV &amp; Videos</a>
                                                    </li>
                                                    <li><a href="#">Camera, Photos &amp; Videos</a>
                                                    </li>
                                                    <li><a href="#">Cellphones &amp; Accessories</a>
                                                    </li>
                                                    <li><a href="#">Headphones</a>
                                                    </li>
                                                    <li><a href="#">Videosgames</a>
                                                    </li>
                                                    <li><a href="#">Wireless Speakers</a>
                                                    </li>
                                                    <li><a href="#">Office Electronic</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu__column">
                                                <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                                <ul class="mega-menu__list">
                                                    <li><a href="#">Digital Cables</a>
                                                    </li>
                                                    <li><a href="#">Audio &amp; Video Cables</a>
                                                    </li>
                                                    <li><a href="#">Batteries</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><i class="icon-shirt"></i> Clothing &amp; Apparel</a>
                                    </li>
                                    <li><a href="#"><i class="icon-lampshade"></i> Home, Garden &amp; Kitchen</a>
                                    </li>
                                    <li><a href="#"><i class="icon-heart-pulse"></i> Health &amp; Beauty</a>
                                    </li>
                                    <li><a href="#"><i class="icon-diamond2"></i> Yewelry &amp; Watches</a>
                                    </li>
                                    <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-desktop"></i> Computer &amp; Technology</a>
                                        <div class="mega-menu">
                                            <div class="mega-menu__column">
                                                <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                                <ul class="mega-menu__list">
                                                    <li><a href="#">Computer &amp; Tablets</a>
                                                    </li>
                                                    <li><a href="#">Laptop</a>
                                                    </li>
                                                    <li><a href="#">Monitors</a>
                                                    </li>
                                                    <li><a href="#">Networking</a>
                                                    </li>
                                                    <li><a href="#">Drive &amp; Storages</a>
                                                    </li>
                                                    <li><a href="#">Computer Components</a>
                                                    </li>
                                                    <li><a href="#">Security &amp; Protection</a>
                                                    </li>
                                                    <li><a href="#">Gaming Laptop</a>
                                                    </li>
                                                    <li><a href="#">Accessories</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><i class="icon-baby-bottle"></i> Babies &amp; Moms</a>
                                    </li>
                                    <li><a href="#"><i class="icon-baseball"></i> Sport &amp; Outdoor</a>
                                    </li>
                                    <li><a href="#"><i class="icon-smartphone"></i> Phones &amp; Accessories</a>
                                    </li>
                                    <li><a href="#"><i class="icon-book2"></i> Books &amp; Office</a>
                                    </li>
                                    <li><a href="#"><i class="icon-car-siren"></i> Cars &amp; Motocycles</a>
                                    </li>
                                    <li><a href="#"><i class="icon-wrench"></i> Home Improments</a>
                                    </li>
                                    <li><a href="#"><i class="icon-tag"></i> Vouchers &amp; Services</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="navigation__right">
                        <ul class="menu">
                            <li class="menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Marketplace Full Width</a>
                                    </li>
                                    <li><a href="homepage-2.html">Home Auto Parts</a>
                                    </li>
                                    <li><a href="homepage-10.html">Home Technology</a>
                                    </li>
                                    <li><a href="homepage-9.html">Home Organic</a>
                                    </li>
                                    <li><a href="homepage-3.html">Home Marketplace V1</a>
                                    </li>
                                    <li><a href="homepage-4.html">Home Marketplace V2</a>
                                    </li>
                                    <li><a href="homepage-5.html">Home Marketplace V3</a>
                                    </li>
                                    <li><a href="homepage-6.html">Home Marketplace V4</a>
                                    </li>
                                    <li><a href="homepage-7.html">Home Electronic</a>
                                    </li>
                                    <li><a href="homepage-8.html">Home Furniture</a>
                                    </li>
                                    <li><a href="homepage-kids.html">Home Kids</a>
                                    </li>
                                    <li><a href="homepage-photo-and-video.html">Home photo and picture</a>
                                    </li>
                                    <li><a href="home-medical.html">Home Medical</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                                <div class="mega-menu">
                                    <div class="mega-menu__column">
                                        <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="shop-default.html">Shop Default</a>
                                            </li>
                                            <li><a href="shop-default.html">Shop Fullwidth</a>
                                            </li>
                                            <li><a href="shop-categories.html">Shop Categories</a>
                                            </li>
                                            <li><a href="shop-sidebar.html">Shop Sidebar</a>
                                            </li>
                                            <li><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                            </li>
                                            <li><a href="shop-carousel.html">Shop Carousel</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Product Layout<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="product-default.html">Default</a>
                                            </li>
                                            <li><a href="product-extend.html">Extended</a>
                                            </li>
                                            <li><a href="product-full-content.html">Full Content</a>
                                            </li>
                                            <li><a href="product-box.html">Boxed</a>
                                            </li>
                                            <li><a href="product-sidebar.html">Sidebar</a>
                                            </li>
                                            <li><a href="product-default.html">Fullwidth</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Product Types<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="product-default.html">Simple</a>
                                            </li>
                                            <li><a href="product-default.html">Color Swatches</a>
                                            </li>
                                            <li><a href="product-image-swatches.html">Images Swatches</a>
                                            </li>
                                            <li><a href="product-countdown.html">Countdown</a>
                                            </li>
                                            <li><a href="product-multi-vendor.html">Multi-Vendor</a>
                                            </li>
                                            <li><a href="product-instagram.html">Instagram</a>
                                            </li>
                                            <li><a href="product-affiliate.html">Affiliate</a>
                                            </li>
                                            <li><a href="product-on-sale.html">On sale</a>
                                            </li>
                                            <li><a href="product-video.html">Video Featured</a>
                                            </li>
                                            <li><a href="product-groupped.html">Grouped</a>
                                            </li>
                                            <li><a href="product-out-stock.html">Out Of Stock</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Woo Pages<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="shopping-cart.html">Shopping Cart</a>
                                            </li>
                                            <li><a href="checkout.html">Checkout</a>
                                            </li>
                                            <li><a href="whishlist.html">Whishlist</a>
                                            </li>
                                            <li><a href="compare.html">Compare</a>
                                            </li>
                                            <li><a href="order-tracking.html">Order Tracking</a>
                                            </li>
                                            <li><a href="my-account.html">My Account</a>
                                            </li>
                                            <li><a href="checkout-2.html">Checkout 2</a>
                                            </li>
                                            <li><a href="shipping.html">Shipping</a>
                                            </li>
                                            <li><a href="payment.html">Payment</a>
                                            </li>
                                            <li><a href="payment-success.html">Payment Success</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                                <div class="mega-menu">
                                    <div class="mega-menu__column">
                                        <h4>Basic Page<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="about-us.html">About Us</a>
                                            </li>
                                            <li><a href="contact-us.html">Contact</a>
                                            </li>
                                            <li><a href="faqs.html">Faqs</a>
                                            </li>
                                            <li><a href="comming-soon.html">Comming Soon</a>
                                            </li>
                                            <li><a href="404-page.html">404 Page</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="become-a-vendor.html">Become a Vendor</a>
                                            </li>
                                            <li><a href="vendor-store.html">Vendor Store</a>
                                            </li>
                                            <li><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                            </li>
                                            <li><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                            </li>
                                            <li><a href="store-list.html">Store List</a>
                                            </li>
                                            <li><a href="store-list.html">Store List 2</a>
                                            </li>
                                            <li><a href="store-detail.html">Store Detail</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Account Pages<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="user-information.html">User Information</a>
                                            </li>
                                            <li><a href="addresses.html">Addresses</a>
                                            </li>
                                            <li><a href="invoices.html">Invoices</a>
                                            </li>
                                            <li><a href="invoice-detail.html">Invoice Detail</a>
                                            </li>
                                            <li><a href="notifications.html">Notifications</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
                                <div class="mega-menu">
                                    <div class="mega-menu__column">
                                        <h4>Blog Layout<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="blog-grid.html">Grid</a>
                                            </li>
                                            <li><a href="blog-list.html">Listing</a>
                                            </li>
                                            <li><a href="blog-small-thumb.html">Small Thumb</a>
                                            </li>
                                            <li><a href="blog-left-sidebar.html">Left Sidebar</a>
                                            </li>
                                            <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Single Blog<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="blog-detail.html">Single 1</a>
                                            </li>
                                            <li><a href="blog-detail-2.html">Single 2</a>
                                            </li>
                                            <li><a href="blog-detail-3.html">Single 3</a>
                                            </li>
                                            <li><a href="blog-detail-4.html">Single 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="inline ps-block--header-hotline">
                            <p><i class="icon-telephone"></i>Hotline:<strong> 1-800-234-5678</strong></p>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <header class="header header--mobile" data-sticky="true">
            <div class="header__top">
                <div class="header__left">
                    <p>Welcome to Martfury Online Shopping Store !</p>
                </div>
                <div class="header__right">
                    <ul class="navigation__extra">
                        <li><a href="#">Sell on Martfury</a></li>
                        <li><a href="#">Tract your order</a></li>
                        <li>
                            <div class="ps-dropdown"><a href="#">US Dollar</a>
                                <ul class="ps-dropdown-menu">
                                    <li><a href="#">Us Dollar</a></li>
                                    <li><a href="#">Euro</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="ps-dropdown language">
                                <a href="#"><img src="{{ asset('dist/images/web/flag/en.png') }}" alt="">English</a>
                                <ul class="ps-dropdown-menu">
                                    <li>
                                        <a href="#"><img src="{{ asset('dist/images/web/flag/germany.png') }}  " alt=""> Germany</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('dist/images/web/flag/fr.png') }}" alt=""> France</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navigation--mobile">
                <div class="navigation__left">
                    <a class="ps-logo" href="index.html"><img src="{{ asset('dist/images/web/logo_light.png') }}" alt=""></a>
                </div>
                <div class="navigation__right">
                    <div class="header__actions">
                        <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                            <div class="ps-cart__content">
                                <div class="ps-cart__items">
                                    <div class="ps-product--cart-mobile">
                                        <div class="ps-product__thumbnail">
                                            <a href="#"><img src="{{ asset('dist/images/web/products/clothing/7.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                        </div>
                                    </div>
                                    <div class="ps-product--cart-mobile">
                                        <div class="ps-product__thumbnail">
                                            <a href="#"><img src="{{ asset('dist/images/web/products/clothing/5.jpg') }}  " alt=""></a>
                                        </div>
                                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-cart__footer">
                                    <h3>Sub Total:<strong>$59.99</strong></h3>
                                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="ps-block--user-header">
                            <div class="ps-block__left"><i class="icon-user"></i></div>
                            <div class="ps-block__right"><a href="my-account.html">Login</a><a href="my-account.html">Register</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-search--mobile">
                <form class="ps-form--search-mobile" action="index.html" method="get">
                    <div class="form-group--nest">
                        <input class="form-control" type="text" placeholder="Search something...">
                        <button><i class="icon-magnifier"></i></button>
                    </div>
                </form>
            </div>
        </header>

        <div id="homepage-3">
            <div class="ps-home-banner">
                <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1"
                    data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                    <div class="ps-banner--market-1" data-background="{{ asset('dist/images/web/slider/home-3/home-banner/1.jpg') }}"><img src="{{ asset('dist/images/web/slider/home-3/home-banner/1.jpg') }}" alt="">
                        <div class="ps-banner__content">
                            <h5>Mega Sale Nov 2019</h5>
                            <h3>Double Combo With <br> The Body Shop</h3>
                            <p>Sale up to <strong>50% Off </strong></p><a class="ps-btn" href="#">Shop Now</a>
                        </div>
                    </div>
                    <div class="ps-banner--market-1" data-background="{{ asset('dist/images/web/slider/home-3/home-banner/2.jpg') }}"><img src="{{ asset('dist/images/web/slider/home-3/home-banner/2.jpg') }}" alt="">
                        <div class="ps-banner__content">
                            <h5>Mega Sale Nov 2017</h5>
                            <h3>IKEA Minimalist <br> Otoman</h3>
                            <p>Discount <strong>50% Off </strong></p><a class="ps-btn" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="ps-site-features">
                <div class="container">
                    <div class="ps-block--site-features ps-block--site-features-2">
                        <div class="ps-block__item">
                            <div class="ps-block__left"><i class="icon-rocket"></i></div>
                            <div class="ps-block__right">
                                <h4>Free Delivery</h4>
                                <p>For all oders over $99</p>
                            </div>
                        </div>
                        <div class="ps-block__item">
                            <div class="ps-block__left"><i class="icon-sync"></i></div>
                            <div class="ps-block__right">
                                <h4>90 Days Return</h4>
                                <p>If goods have problems</p>
                            </div>
                        </div>
                        <div class="ps-block__item">
                            <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                            <div class="ps-block__right">
                                <h4>Secure Payment</h4>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                        <div class="ps-block__item">
                            <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                            <div class="ps-block__right">
                                <h4>24/7 Support</h4>
                                <p>Dedicated support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-promotions">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ">
                            <a class="ps-collection" href="#"><img src="{{ asset('dist/images/web/promotions/home-3-1.jpg') }}" alt=""></a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ">
                            <a class="ps-collection" href="#"><img src="{{ asset('dist/images/web/promotions/home-3-2.jpg') }}" alt=""></a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ">
                            <a class="ps-collection" href="#"><img src="{{ asset('dist/images/web/promotions/home-3-3.jpg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-deal-of-day">
                <div class="ps-container">
                    <div class="ps-section__header">
                        <div class="ps-block--countdown-deal">
                            <div class="ps-block__left">
                                <h3>Deal of the day</h3>
                            </div>
                            <div class="ps-block__right">
                                <figure>
                                    <figcaption>End in:</figcaption>
                                    <ul class="ps-countdown" data-time="December 30, 2021 15:37:25">
                                        <li><span class="days"></span></li>
                                        <li><span class="hours"></span></li>
                                        <li><span class="minutes"></span></li>
                                        <li><span class="seconds"></span></li>
                                    </ul>
                                </figure>
                            </div>
                        </div><a href="shop-default.html">View all</a>
                    </div>
                    <div class="ps-section__content">
                        <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="4"
                            data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                            <div class="ps-product ps-product--inner">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home/1.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-16%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                        <div class="ps-product__progress-bar ps-progress" data-value="78">
                                            <div class="ps-progress__value"><span></span></div>
                                            <p>Sold:57</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--inner">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home/2.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$101.99</p>
                                        <div class="ps-product__progress-bar ps-progress" data-value="79">
                                            <div class="ps-progress__value"><span></span></div>
                                            <p>Sold:55</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--inner">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home/3.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-25%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                        <div class="ps-product__progress-bar ps-progress" data-value="2">
                                            <div class="ps-progress__value"><span></span></div>
                                            <p>Sold:58</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--inner">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home/4.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$320.00</p>
                                        <div class="ps-product__progress-bar ps-progress" data-value="81">
                                            <div class="ps-progress__value"><span></span></div>
                                            <p>Sold:6</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--inner">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home/5.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$85.00</p>
                                        <div class="ps-product__progress-bar ps-progress" data-value="88">
                                            <div class="ps-progress__value"><span></span></div>
                                            <p>Sold:87</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--inner">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home/6.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$92.00</p>
                                        <div class="ps-product__progress-bar ps-progress" data-value="6">
                                            <div class="ps-progress__value"><span></span></div>
                                            <p>Sold:50</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--inner">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home/7.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-46%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                        <div class="ps-product__progress-bar ps-progress" data-value="75">
                                            <div class="ps-progress__value"><span></span></div>
                                            <p>Sold:54</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-section--gray">
                <div class="container">
                    <div class="ps-block--products-of-category">
                        <div class="ps-block__categories">
                            <h3>Clothing & <br> Apparel</h3>
                            <ul>
                                <li><a href="#">Best Seller</a></li>
                                <li><a href="#">New Arrivals</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Girls</a></li>
                                <li><a href="#">Boys</a></li>
                                <li><a href="#">Baby</a></li>
                                <li><a href="#">Sales & Deals</a></li>
                            </ul><a class="ps-block__more-link" href="#">View All</a>
                        </div>
                        <div class="ps-block__slider">
                            <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1"
                                data-owl-item-lg="1" data-owl-duration="500" data-owl-mousedrag="off">
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/clothing-1.jpg') }} " alt=""></a>
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/clothing-2.jpg') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/clothing-3.jpg') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="ps-block__product-box">
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/clothing/1.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-16%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="clothing"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/clothing/2.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="clothing"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$101.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/clothing/3.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-25%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="clothing"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/clothing/4.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="clothing"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$320.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/clothing/5.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="clothing"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$85.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/clothing/6.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="clothing"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$92.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-block--products-of-category">
                        <div class="ps-block__categories">
                            <h3>Computer & Techologies</h3>
                            <ul>
                                <li><a href="#">Best Seller</a></li>
                                <li><a href="#">New Arrivals</a></li>
                                <li><a href="#">Desktop PC</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Smartphones</a></li>
                                <li><a href="#">Tablets</a></li>
                                <li><a href="#">Storage & Memory</a></li>
                                <li><a href="#">PC Component</a></li>
                                <li><a href="#">Computer Accessories</a></li>
                                <li><a href="#">Game Accessories</a></li>
                                <li><a href="#">Sales & Deals</a></li>
                            </ul><a class="ps-block__more-link" href="#">View All</a>
                        </div>
                        <div class="ps-block__slider">
                            <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1"
                                data-owl-item-lg="1" data-owl-duration="500" data-owl-mousedrag="off">
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/technology-1.jpg') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/technology-2.jpg') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/technology-3.jpg') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="ps-block__product-box">
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home-3/technology/1.jpg') }}" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="technology"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">105.30</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home-3/technology/2.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge out-stock">7%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="technology"><a class="ps-product__title" href="product-default.html">Beat Spill 2.0 Wireless Speaker – White</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$125.00 <del>$135.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home-3/technology/3.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-25%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="technology"><a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$990.00 <del>$1250.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home-3/technology/4.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">10%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="technology"><a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12”</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>04</span>
                                        </div>
                                        <p class="ps-product__price">$1090.00 <del>$1550.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home-3/technology/5.jpg') }}" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="technology"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$85.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home-3/technology/6.jpg') }}" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="technology"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$950.60</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-block--products-of-category">
                        <div class="ps-block__categories">
                            <h3>Consumer Electronics</h3>
                            <ul>
                                <li><a href="shop-default.html">Best Seller</a></li>
                                <li><a href="shop-default.html">New Arrivals</a></li>
                                <li><a href="shop-default.html">TV Television</a></li>
                                <li><a href="shop-default.html">Air Condition</a></li>
                                <li><a href="shop-default.html">Washing Machine</a></li>
                                <li><a href="shop-default.html">Microwave</a></li>
                                <li><a href="shop-default.html">Refrigerator</a></li>
                                <li><a href="shop-default.html">Office Electronic</a></li>
                                <li><a href="shop-default.html">Car Electronic</a></li>
                                <li><a href="shop-default.html">Sales & Deals</a></li>
                            </ul><a class="ps-block__more-link" href="#">View All</a>
                        </div>
                        <div class="ps-block__slider">
                            <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1"
                                data-owl-item-lg="1" data-owl-duration="500" data-owl-mousedrag="off">
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/electronic-1.jpg') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/electronic-2.jpg') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/electronic-3.jpg') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="ps-block__product-box">
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/electronic/1.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-16%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="technology"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/electronic/2.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="technology"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$101.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/electronic/3.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-25%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="technology"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/electronic/4.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="technology"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$320.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/electronic/5.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="technology"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$85.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/electronic/6.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="technology"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$92.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-block--products-of-category">
                        <div class="ps-block__categories">
                            <h3>Home, Garden & Kitchen</h3>
                            <ul>
                                <li><a href="shop-default.html">Best Seller</a></li>
                                <li><a href="shop-default.html">New Arrivals</a></li>
                                <li><a href="shop-default.html">Furniture</a></li>
                                <li><a href="shop-default.html">Home Decor</a></li>
                                <li><a href="shop-default.html">Cookware</a></li>
                                <li><a href="shop-default.html">Utensils & Gadget</a></li>
                                <li><a href="shop-default.html">Garden Tools</a></li>
                                <li><a href="shop-default.html">Acessesories</a></li>
                                <li><a href="shop-default.html">Sales & Deals</a></li>
                            </ul><a class="ps-block__more-link" href="#">View All</a>
                        </div>
                        <div class="ps-block__slider">
                            <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1"
                                data-owl-item-lg="1" data-owl-duration="500" data-owl-mousedrag="off">
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/kitchen-1.jpg') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/kitchen-2.jpg') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/kitchen-3.jpg') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="ps-block__product-box">
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home/1.jpg') }} " alt=""></a>
                                    <div class="ps-product__badge">-16%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="garden"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home/2.jpg') }} " alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="garden"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$101.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home/3.jpg') }} " alt=""></a>
                                    <div class="ps-product__badge">-25%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="garden"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home/4.jpg') }} " alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="garden"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$320.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home/5.jpg') }} " alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="garden"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$85.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home/6.jpg') }} " alt=""></a>
                                    <div class="ps-product__badge out-stock">Out Of Stock</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="garden"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$92.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-block--products-of-category">
                        <div class="ps-block__categories">
                            <h3>Healthy & Beauty</h3>
                            <ul>
                                <li><a href="shop-default.html">Best Seller</a></li>
                                <li><a href="shop-default.html">New Arrivals</a></li>
                                <li><a href="shop-default.html">Makeup</a></li>
                                <li><a href="shop-default.html">Skin Care</a></li>
                                <li><a href="shop-default.html">Hair Care</a></li>
                                <li><a href="shop-default.html">Tools & Equipments</a></li>
                                <li><a href="shop-default.html">Perfumer & Cologine</a></li>
                                <li><a href="shop-default.html">Sales & Deals</a></li>
                            </ul><a class="ps-block__more-link" href="#">View All</a>
                        </div>
                        <div class="ps-block__slider">
                            <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1"
                                data-owl-item-lg="1" data-owl-duration="500" data-owl-mousedrag="off">
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/healthy-1.jpg') }} " alt=""></a>
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/healthy-2.jpg') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('dist/images/web/slider/home-3/healthy-3.jpg') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="ps-block__product-box">
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home-3/healthy/1.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-16%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="garden"><a class="ps-product__title" href="product-default.html">Aveeno Moisturizing Body Shower 450ml</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$47.99 <del>$59.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home-3/healthy/2.jpg') }}" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="garden"><a class="ps-product__title" href="product-default.html">NYX Beauty Couton Pallete Makeup 12</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$101.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home-3/healthy/3.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-25%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="garden"><a class="ps-product__title" href="product-default.html">Baxter Care Hair Kit For Bearded Mens</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home-3/healthy/4.jpg') }}" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="garden"><a class="ps-product__title" href="product-default.html">Anna Sui Putty Mask Perfection</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">25.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home-3/healthy/5.jpg') }}" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="garden"><a class="ps-product__title" href="product-default.html">Set 30 Piece Korea StartSkin Natural Mask</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$85.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--simple">
                                <div class="ps-product__thumbnail">
                                    <a href="product-default.html"><img src="{{ asset('dist/images/web/products/home-3/healthy/6.jpg') }}" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="garden"><a class="ps-product__title" href="product-default.html">Ciate Palemore Lipstick Bold Red Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$92.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-newsletter">
                <div class="container">
                    <form class="ps-form--newsletter" action="do_action" method="post">
                        <div class="row">
                            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="ps-form__left">
                                    <h3>Newsletter</h3>
                                    <p>Subcribe to get information about products and coupons</p>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="ps-form__right">
                                    <div class="form-group--nest">
                                        <input class="form-control" type="email" placeholder="Email address">
                                        <button class="ps-btn">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="ps-footer">
            <div class="container">
                <div class="ps-footer__widgets">
                    <aside class="widget widget_footer widget_contact-us">
                        <h4 class="widget-title">Contact us</h4>
                        <div class="widget_content">
                            <p>Call us 24/7</p>
                            <h3>1800 97 97 69</h3>
                            <p>502 New Design Str, Melbourne, Australia <br><a href="mailto:contact@martfury.co">contact@martfury.co</a></p>
                            <ul class="ps-list--social">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="widget widget_footer">
                        <h4 class="widget-title">Quick links</h4>
                        <ul class="ps-list--link">
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Term & Condition</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Return</a></li>
                            <li><a href="faqs.html">FAQs</a></li>
                        </ul>
                    </aside>
                    <aside class="widget widget_footer">
                        <h4 class="widget-title">Company</h4>
                        <ul class="ps-list--link">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="#">Affilate</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </aside>
                    <aside class="widget widget_footer">
                        <h4 class="widget-title">Bussiness</h4>
                        <ul class="ps-list--link">
                            <li><a href="#">Our Press</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="my-account.html">My account</a></li>
                            <li><a href="shop-default.html">Shop</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="ps-footer__links">
                    <p><strong>Consumer Electric:</strong><a href="#">Air Conditioners</a><a href="#">Audios &amp; Theaters</a><a href="#">Car Electronics</a><a href="#">Office Electronics</a><a href="#">TV Televisions</a><a href="#">Washing Machines</a>
                    </p>
                    <p><strong>Clothing &amp; Apparel:</strong><a href="#">Printers</a><a href="#">Projectors</a><a href="#">Scanners</a><a href="#">Store &amp; Business</a><a href="#">4K Ultra HD TVs</a><a href="#">LED TVs</a><a href="#">OLED TVs</a>
                    </p>
                    <p><strong>Home, Garden &amp; Kitchen:</strong><a href="#">Cookware</a><a href="#">Decoration</a><a href="#">Furniture</a><a href="#">Garden Tools</a><a href="#">Garden Equipments</a><a href="#">Powers And Hand Tools</a><a href="#">Utensil &amp; Gadget</a>
                    </p>
                    <p><strong>Health &amp; Beauty:</strong><a href="#">Hair Care</a><a href="#">Decoration</a><a href="#">Hair Care</a><a href="#">Makeup</a><a href="#">Body Shower</a><a href="#">Skin Care</a><a href="#">Cologine</a><a href="#">Perfume</a>
                    </p>
                    <p><strong>Jewelry &amp; Watches:</strong><a href="#">Necklace</a><a href="#">Pendant</a><a href="#">Diamond Ring</a><a href="#">Sliver Earing</a><a href="#">Leather Watcher</a><a href="#">Gucci</a>
                    </p>
                    <p><strong>Computer &amp; Technologies:</strong><a href="#">Desktop PC</a><a href="#">Laptop</a><a href="#">Smartphones</a><a href="#">Tablet</a><a href="#">Game Controller</a><a href="#">Audio &amp; Video</a><a href="#">Wireless Speaker</a>
                        <a href="#">Done</a>
                    </p>
                </div>
                <div class="ps-footer__copyright">
                    <p>© 2018 Martfury. All Rights Reserved</p>
                    <p><span>We Using Safe Payment For:</span>
                        <a href="#"><img src="{{ asset('dist/images/web/payment-method/1.jpg') }} " alt=""></a>
                        <a href="#"><img src="{{ asset('dist/images/web/payment-method/2.jpg') }} " alt=""></a>
                        <a href="#"><img src="{{ asset('dist/images/web/payment-method/3.jpg') }} " alt=""></a>
                        <a href="#"><img src="{{ asset('dist/images/web/payment-method/4.jpg') }} " alt=""></a>
                        <a href="#"><img src="{{ asset('dist/images/web/payment-method/5.jpg') }} " alt=""></a>
                    </p>
                </div>
            </div>
        </footer>


        <div id="back2top"><i class="icon icon-arrow-up"></i></div>
        <div class="ps-site-overlay"></div>
        <div id="loader-wrapper">
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <div class="ps-search" id="site-search">
            <a class="ps-btn--close" href="#"></a>
            <div class="ps-search__content">
                <form class="ps-form--primary-search" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="Search for...">
                    <button><i class="aroma-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
        <div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content"><span class="modal-close" data-dismiss="modal"><i class="icon-cross2"></i></span>
                    <article class="ps-product--detail ps-product--fullwidth ps-product--quickview">
                        <div class="ps-product__header">
                            <div class="ps-product__thumbnail" data-vertical="false">
                                <div class="ps-product__images" data-arrow="true">
                                    <div class="item"><img src="{{ asset('dist/images/web/products/detail/fullwidth/1.jpg') }} " alt=""></div>
                                    <div class="item"><img src="{{ asset('dist/images/web/products/detail/fullwidth/2.jpg') }} " alt=""></div>
                                    <div class="item"><img src="{{ asset('dist/images/web/products/detail/fullwidth/3.jpg') }} " alt=""></div>
                                </div>
                            </div>
                            <div class="ps-product__info">
                                <h1>Marshall Kilburn Portable Wireless Speaker</h1>
                                <div class="ps-product__meta">
                                    <p>Brand:<a href="shop-default.html">Sony</a></p>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>(1 review)</span>
                                    </div>
                                </div>
                                <h4 class="ps-product__price">$36.78 – $56.99</h4>
                                <div class="ps-product__desc">
                                    <p>Sold By:<a href="shop-default.html"><strong> Go Pro</strong></a></p>
                                    <ul class="ps-list--dot">
                                        <li> Unrestrained and portable active stereo speaker</li>
                                        <li> Free from the confines of wires and chords</li>
                                        <li> 20 hours of portable capabilities</li>
                                        <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                        <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                    </ul>
                                </div>
                                <div class="ps-product__shopping"><a class="ps-btn ps-btn--black" href="#">Add to cart</a><a class="ps-btn" href="#">Buy Now</a>
                                    <div class="ps-product__actions"><a href="#"><i class="icon-heart"></i></a><a href="#"><i class="icon-chart-bars"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>



        @stack('modals')
        <script src="{{ asset('dist/plugins/jquery.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/nouislider/nouislider.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/popper.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/masonry.pkgd.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/jquery.matchHeight-min.js') }}"></script>
        <script src="{{ asset('dist/plugins/slick/slick/slick.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/slick-animation.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/lightGallery-master/dist/js/lightgallery-all.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/sticky-sidebar/dist/sticky-sidebar.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/select2/dist/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/gmap3.min.js') }}"></script>
        <script src="{{ asset('dist/scripts/main.js') }}" ></script>
        @livewireScripts
    </body>
</html>
