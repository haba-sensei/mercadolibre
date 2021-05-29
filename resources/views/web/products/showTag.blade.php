@extends('../layouts/web/content')
@section('subcontent')
<div class="ps-breadcrumb">
    <div class="ps-container">
        <ul class="breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li>Shop</li>
        </ul>
    </div>
</div>
<div class="ps-page--shop" id="shop-sidebar">
    <div class="container">
        <div class="ps-page__header">
            <h1 style="text-transform: uppercase">Categoria {{ $category[0]->name }}</h1>
            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                <a href="javascript">
                    <img src="{{ Storage::url($category[0]->cat_img) }}" alt="{{ $category[0]->name }}">
                </a>
            </div>
        </div>
        <div class="ps-layout--shop">

            <div class="ps-layout__left">
                <livewire:web.product.sidebar-product  >

            </div>

            @livewire('web.product.table-product', ['category' => $category])

        </div>
    </div>
</div>
@endsection


