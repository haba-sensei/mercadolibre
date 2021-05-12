@foreach ($orderCatId as $indice)

    @foreach ($categoriasF as $item)

        @if ($indice == $item->id)
            <div class="ps-promotions">
                <div class="container">
                    <a href="javascript:" class="">
                        <div class="ps-collection">
                            <img src="{{ Storage::url($item->cat_img) }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="ps-product-list ps-clothings" style="padding-bottom: 11rem;">
                <div class="container">
                    <div class="ps-section__header">
                        <h3 style="text-transform: capitalize;" >{{ $item->name }}</h3>
                        <ul class="ps-section__links">
                            <li><a href="javascript:">VER MAS</a></li>
                        </ul>
                    </div>
                <div class="ps-section__content">
            <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
        @endif

    @endforeach

    @foreach ($productosF as $prods)
                @if ($indice == $prods->category->id)
                <div class="ps-product">
                    <div class="ps-product__thumbnail"><a href="javascript:"><img src="{{ Storage::url($prods->image->url) }}" alt=""></a>
                        <div class="ps-product__badge {{ $prods->stock > 1 ? '' : 'out-stock' }}">{{ $prods->stock > 1 ? 'En Stock' : 'Sin Stock' }}</div>
                        <ul class="ps-product__actions">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Ver mas"><i class="icon-share"></i></a></li>
                        </ul>
                    </div>
                    <div class="ps-product__container"><a class="ps-product__vendor" href="javascript:">{{ $prods->category->name }}</a>
                        <div class="ps-product__content"><a class="ps-product__title" href="javascript:">{{ $prods->name }}</a>

                            <p class="ps-product__price sale">${{ $prods->amount }}  </p>
                        </div>
                        <div class="ps-product__content hover"><a class="ps-product__title" href="javascript:">{{ $prods->name }}</a>
                            <p class="ps-product__price sale">${{ $prods->amount }}  </p>
                        </div>
                    </div>
                </div>

                @endif


    @endforeach

    </div>
    </div>
    </div>
    </div>
@endforeach












