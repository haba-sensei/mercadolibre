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
        <div class="ps-layout--shop">
            <div class="ps-layout__left">

                <livewire:web.product.sidebar-product  >

            </div>
            <livewire:web.product.table-product  >
        </div>
    </div>
</div>
@endsection
