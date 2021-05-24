@extends('../layouts/web/content')
@section('subcontent')
    <div class="ps-breadcrumb">
        <div class="ps-container">
            <ul class="breadcrumb">
                <li><a href="{{ route('web.home') }}">Inicio</a></li>
                <li style="text-transform: capitalize;"> Ingreso</li>
            </ul>
        </div>
    </div>
    <div class="ps-my-account-2">
        <div class="container">
            {{ $slot }}
        </div>
    </div>


@endsection
