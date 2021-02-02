@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')

{{-- Componente Anonimo //-- home reporte general --// => views/components/admin/home  --}}   
     <x-admin.home />

@endsection
