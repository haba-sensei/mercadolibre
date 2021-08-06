@extends('../layouts/web/content')
@section('subcontent')
<div class="ps-breadcrumb">
    <div class="ps-container">
        <ul class="breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li style="text-transform: capitalize;" > {{ $product->category->name }} </li>
            <li style="text-transform: capitalize;">{{ $product->name }}</li>
        </ul>
    </div>
</div>
<div class="ps-page--product ps-page--product-box">
    <div class="container">
        <div class="ps-product--detail ps-product--box">
            <div class="ps-product__header ps-product__box">
                <div class="ps-product__thumbnail" data-vertical="true">
                    <figure>
                        <div class="ps-wrapper">
                            <div class="ps-product__gallery" data-arrow="true">
                                <div class="item">
                                    <a href="{{ Storage::url($product->image->url) }}">
                                        <img src="{{ Storage::url($product->image->url) }}" alt="">
                                    </a>
                                </div>
                                @foreach ($product->gallery as $gallery)
                                <div class="item">
                                    <a href="{{ Storage::url($gallery->url) }}">
                                        <img src="{{ Storage::url($gallery->url) }}" alt="">
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </figure>
                    <div class="ps-product__variants" data-item="6" data-md="6" data-sm="6" data-arrow="true">
                        <div class="item">
                            <img src="{{ Storage::url($product->image->url) }}" alt="">
                        </div>

                        @foreach ($product->gallery as $gallery)
                        <div class="item">
                            <img src="{{ Storage::url($gallery->url) }}" alt="">
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="ps-product__info">
                    <h1>{{ $product->name }}</h1>
                    <div class="ps-product__meta">
                    </div>
                    <h4 class="ps-product__price">${{ $product->amount }} </h4>
                    <div class=" ps-product__meta">
                        <p class="mb-5">{{ $product->extract }}</p>
                    </div>
                    <div class="ps-product__desc">
                        <p>Vendedor:<a href="{{ route('web.tienda.show', $product->tienda->slug ) }}"><strong class="capitalize"> {{ $product->tienda->name }}</strong></a></p>

                    </div>

                    <div class="ps-product__shopping">
                        @livewire('web.product.single-view-product-component', ['product_id_show' => $product->id])

                    </div>
                    <div class="ps-product__specification">

                        <p class="categories">
                            <strong> Categoria:</strong>
                            <a href="{{ route('web.products.show.categories', $product->category->slug ) }}"> {{ $product->category->name }} </a>
                        </p>
                        <p class="categories">
                            <strong> Tags</strong>
                            @foreach ($product->tags as $tag)
                            <a href="javascript:"> {{ $tag->name }} </a>
                            @endforeach



                        </p>
                    </div>
                    <div class="ps-product__sharing"><a class="facebook" href="#"><i class="fa fa-facebook"></i></a><a class="twitter" href="#"><i class="fa fa-twitter"></i></a><a class="google" href="#"><i class="fa fa-google-plus"></i></a><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
            <div class="ps-product__content ps-tab-root">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-product__box">
                            <ul class="ps-tab-list">
                                <li class="active"><a href="#tab-1">Descripción</a></li>
                                <li><a href="#tab-3">Vendedor</a></li>
                            </ul>
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="tab-1">
                                    <div class="ps-document">
                                        <p class="">{{ $product->body }}</p>
                                    </div>
                                </div>

                                <div class="ps-tab" id="tab-3">
                                    <h4>GoPro</h4>
                                    <p>Digiworld US, New York’s no.1 online retailer was established in May 2012 with the aim and vision to become the one-stop shop for retail in New York with implementation of best practices both online</p><a href="#">More Products from gopro</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- <div class="ps-section--default">
            <div class="ps-section__header">
                <h3>Productos Relacionados</h3>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">

                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/11.jpg" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$13.43</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                <p class="ps-product__price">$13.43</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
