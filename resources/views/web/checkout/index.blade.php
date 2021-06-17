@extends('../layouts/web/content')
@section('subcontent')
<div class="ps-breadcrumb">
    <div class="ps-container">
        <ul class="breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li style="text-transform: capitalize;" > Checkout  </li>
        </ul>
    </div>
</div>

<livewire:web.checkout.checkout-component />
 
@endsection
