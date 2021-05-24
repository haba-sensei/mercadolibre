@section('modals')
    <div class="modal fade" id="product-quickview" tabindex="-1" role="dialog"
        aria-labelledby="product-quickview" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content"><span class="modal-close" data-dismiss="modal"><i
                        class="icon-cross2"></i></span>
                        <livewire:web.product.quick-view />
            </div>
        </div>
    </div>
@endsection


