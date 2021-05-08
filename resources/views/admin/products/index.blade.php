@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
    @if (session('info'))

        <input id="infomensaje" type="hidden" value="{{ session('info') }}">
        <input id="colormensaje" type="hidden" value="{{ session('color') }}">

    @endif

         <livewire:admin.products.tabla-component />
@endsection

  @section('script')
        @if (session('eliminar') == "ok")
            <script>
                Swal.fire(
                    'Eliminado!',
                    'El Registro y sus Imagenes han sido eliminadas.',
                    'success'
                )
            </script>
        @endif

      <script>
        $('.form_elim').submit(function(e){

        e.preventDefault();

            Swal.fire({
                title: 'Seguro deseas Eliminar?',
                text: "Esta Acción Elimina el registro y sus Imagenes!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {
            if (result.isConfirmed) {

                this.submit();

            }
            })

        });




      </script>



  @endsection
