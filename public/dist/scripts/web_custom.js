window.addEventListener('openModal', event => {
    $('#product-quickview').modal('show');

});

window.addEventListener('closeModal', event => {
    $('#product-quickview').modal('hide');
});




window.addEventListener('carrito-updated', event => {
    Toastify({
        text: event.detail.info,
        gravity: "bottom",
        position: "right",
        backgroundColor: event.detail.color,

        duration: 1500

    }).showToast();
});