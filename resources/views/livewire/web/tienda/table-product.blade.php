<div class="ps-section__right">
    <div class="ps-shopping ps-tab-root">
        <div class="ps-shopping__header">
            <p><strong>{{ $products->total() }}</strong> Total de Productos</p>
            {{ $products->links('vendor.livewire.custom') }}
            <div class="ps-shopping__actions" wire:ignore>


            </div>
        </div>
        <div class="ps-tabs">
            <div class="ps-tab active" id="tab-1">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail" >

                                    <a href="{{ route('web.products.show', $product) }}">
                                        <img  src="{{ Storage::url($product->image->url) }}" alt="">
                                    </a>


                                    <ul class="ps-product__actions" style="transform: translate(-50%, 0);">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Add To Cart" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->amount }}  )"><i class="icon-bag2"></i></a></li>
                                        <li>

                                            <a href="javascript:"
                                                wire:click="selectItem({{ $product->id }})">
                                                <i class="icon-eye"></i>
                                            </a>
                                        </li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="{{ route('web.products.show', $product) }}" data-toggle="tooltip" data-placement="top"
                                                title="Ver mas"><i class="icon-share"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <a class="ps-product__vendor" href="{{ route('web.tienda.show', $tienda) }}">{{ $tienda->name }}</a>
                                  
                                    <div class="ps-product__content">
                                        <a class="ps-product__title" href="{{ route('web.products.show', $product) }}">
                                           {{ $product->name }}
                                        </a>

                                        <p class="ps-product__price sale">${{ $product->amount }} </p>
                                    </div>
                                    <div class="ps-product__content hover">
                                        <a class="ps-product__title" href="{{ route('web.products.show', $product) }}">
                                           {{ $product->name }}</a>
                                        <p class="ps-product__price sale">${{ $product->amount }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

                {{ $products->links('vendor.livewire.custom') }}


            </div>

        </div>
    </div>
</div>
@include('web.products.partials.quickview')
