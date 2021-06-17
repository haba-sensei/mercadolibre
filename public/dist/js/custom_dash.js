window.addEventListener('ventas_status', event => {
    Toastify({
        text: event.detail.info,
        gravity: "bottom",
        position: "right",
        backgroundColor: event.detail.color,

        duration: 1500

    }).showToast();
})