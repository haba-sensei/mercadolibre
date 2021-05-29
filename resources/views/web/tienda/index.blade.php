@extends('../layouts/web/content')
@section('subcontent')
    <div class="ps-breadcrumb">
        <div class="ps-container">
            <ul class="breadcrumb">
                <li><a href="{{ route('web.home') }}">Inicio</a></li>
                <li style="text-transform: capitalize;">Tiendas </li>
            </ul>
        </div>
    </div>


    <section class="ps-store-list">
        <div class="container">

            <div class="ps-section__wrapper">
                <div class="ps-section__left">
                    <aside class="widget widget--vendor">
                        <h3 class="widget-title">Search</h3>
                        <input class="form-control" type="text" placeholder="Search...">
                    </aside>
                    <aside class="widget widget--vendor">
                        <h3 class="widget-title">Filter by Category</h3>
                        <div class="form-group">
                            <select class="ps-select">
                                <option>Lighting</option>
                                <option>Exterior</option>
                                <option>Custom Grilles</option>
                                <option>Wheels & Tires</option>
                                <option>Performance</option>
                            </select>
                        </div>
                    </aside>
                    <aside class="widget widget--vendor">
                        <h3 class="widget-title">Filter by Location</h3>
                        <div class="form-group">
                            <select class="ps-select">
                                <option>Chooose Location</option>
                                <option>Exterior</option>
                                <option>Custom Grilles</option>
                                <option>Wheels & Tires</option>
                                <option>Performance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="ps-select">
                                <option>Chooose State</option>
                                <option>Exterior</option>
                                <option>Custom Grilles</option>
                                <option>Wheels & Tires</option>
                                <option>Performance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Search by City">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Search by ZIP">
                        </div>
                    </aside>
                </div>
                <div class="ps-section__right">
                    <section class="ps-store-box">
                        <div class="ps-section__header">
                            <p>Showing 1 -8 of 22 results</p>
                            <select class="ps-select">
                                <option value="1">Sort by Newest: old to news</option>
                                <option value="2">Sort by Newest: New to old</option>
                                <option value="3">Sort by average rating: low to hight</option>
                            </select>
                        </div>
                        <div class="ps-section__content">
                            <div class="row">
                                @foreach ($tiendas as $tienda)
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ">
                                        <article class="ps-block--store">
                                            <div class="ps-block__thumbnail bg--cover"
                                                data-background="{{ Storage::url($tienda->url_perfil) }}">
                                            </div>
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
                                                        <a href="{{ $tienda->email }}"> {{ $tienda->email }}</a>
                                                    </li>
                                                    <li>
                                                        <i class="icon-telephone"></i> {{ $tienda->phone }}
                                                    </li>
                                                </ul>
                                                <div class="ps-block__inquiry" style="width: 100%;">
                                                    <a href="#">
                                                        <i class="icon-store"></i>
                                                            Visitar Tienda
                                                    </a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach


                            </div>


                            <div class="ps-pagination">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
