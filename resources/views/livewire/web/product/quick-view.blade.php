<div>
    <article class="ps-product--detail ps-product--fullwidth ps-product--quickview" >
        <div class="ps-product__header" >
            <div class="ps-product__thumbnail" data-vertical="false" >
                <div class="mb-4 ps-product__images" data-arrow="true" >

                  @isset($image)
                    <div class="item">
                    <img src="{{ Storage::url($image->url) }}" alt="">
                    </div>
                    @endisset


                </div>
            </div>
            <div class="ps-product__info">
                <h1 class="ml-3 mr-3">{{ $name }}</h1>
                <h4 class="ml-3 mr-3 ps-product__price">${{ $amount }}</h4>
                <div class="ml-3 mr-3 ps-product__desc">
                 @if ($tiendaSlug)
                     <p>Vendedor: <a href="{{ route('web.tienda.show', $tiendaSlug) }}"><strong> {{ $tiendaName }}</strong></a></p>
                 @else
                    <p>Vendedor: <a href="javascript:"><strong> {{ $tiendaName }}</strong></a></p>
                 @endif

                     <p class="mr-3 justify-items-auto">{!! $extract !!}</p>

                </div>
                <div class="ps-product__shopping">

                    <figure>
                        <figcaption>Cantidad</figcaption>
                        <div class="form-group--number">
                            <button class="up" wire:click.prevent="increment()"><i class="fa fa-plus"></i></button>
                            <button class="down" wire:click.prevent="decrement({{ $count }})"><i class="fa fa-minus"></i></button>
                            <input class="form-control" type="text" value="{{ $count }}" disabled>
                        </div>
                    </figure>

                     <a class="ps-btn ps-btn--black" wire:click.prevent="store({{ $modelId }}, '{{ $name }}', {{ $count }}, {{ $amount }}  )" href="javascript:">Agregar</a>

                    @if ($slug)
                       <a class="ps-btn" href="{{ route('web.products.show', $slug) }}">Detalles </a>
                    @else
                       <a class="ps-btn" href="javascript:">Detalles</a>
                    @endif


                </div>
                <div class="ps-product__specification">

                    <p class="categories">
                        <strong> Categoria:</strong>
                        <a href="javascript:">
                            @isset($category)
                            {{ $category->name }}
                            @endisset
                        </a>
                    </p>
                    <p class="categories">
                        <strong> Tags</strong>
                        @isset($tags)
                            @foreach ($tags as $itemTag)
                                <a href="javascript:"> {{ $itemTag->name }} </a>
                            @endforeach
                        @endisset

                    </p>
                    <div class="ps-product__sharing">
                        <a class="facebook" href="javascript:">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="twitter" href="javascript:">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="google" href="javascript:">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a class="linkedin" href="javascript:">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a class="instagram" href="javascript:">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </article>
</div>

