<section class="ps-store-list">
    <div class="container">

        <div class="ps-section__wrapper">
            <div class="ps-section__left">
                <aside class="widget widget--vendor">
                    <h3 class="widget-title">Busqueda</h3>
                    <input class="form-control" wire:model.debounce.300ms="search" type="text" placeholder="Search...">
                </aside> 
            </div>

            <div class="ps-section__right">
                <section class="ps-store-box">

                    <div class="ps-section__content">
                        <div class="row">
                            @foreach ($tiendas as $tienda)
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 "  >
                                    <article class="ps-block--store"  >
                                        <a href="{{ route('web.tienda.show', $tienda) }}"  >
                                            <div class="ps-block__thumbnail bg--cover" style="background: url('{{ Storage::url($tienda->url_perfil) }}')" >
                                            </div>
                                        </a>
                                        <div class="ps-block__content" style="position: relative; padding: 0 0px 0px!important;">
                                            <div class="ps-block__author" style="float: right;">
                                                <a class="ps-btn"
                                                    style="background: white!important; border-radius: 29px!important; color: #17a2b8!important;"
                                                    href="{{ route('web.tienda.show', $tienda) }}">Visitar Tienda</a>
                                            </div>
                                            <h4 style="display: inline-block; top: -24px; margin-bottom: -10px!important;
                                                       width: 100%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                            {{ $tienda->name }}
                                            </h4>


                                            <ul class="ps-block__contact">
                                                <li>
                                                    <i class="icon-envelope"></i>
                                                    <a href="mailto:{{ $tienda->email }}"> {{ $tienda->email }}</a>
                                                </li>
                                                <li>
                                                    <i class="icon-telephone"></i> {{ $tienda->phone }}
                                                </li>
                                            </ul>
                                            <div class="ps-block__inquiry" style="width: 100%;">
                                                <a href="{{ route('web.tienda.show', $tienda) }}">
                                                    <i class="icon-store"></i>
                                                        Visitar Tienda
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach


                        </div>

                        {{ $tiendas->links('vendor.livewire.custom') }}
                    </div>

                </section>
            </div>



        </div>
    </div>
</section>

