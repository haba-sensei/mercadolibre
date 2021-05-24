window.addEventListener('openModal', event => {
    $('#product-quickview').modal('show');

});

window.addEventListener('closeModal', event => {
    $('#product-quickview').modal('hide');
});


window.addEventListener('carrito-updated', event => {
    Toastify({

        text: "PRODUCTO AGREGADO AL CARRITO",
        gravity: "bottom",
        position: "right",
        backgroundColor: "#1c3faa",

        duration: 1500

    }).showToast();
})