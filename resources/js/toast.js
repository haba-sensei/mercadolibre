import Toastify from "toastify-js";

(function(cash) {
    "use strict";

    cash(function tostada() {

        var v = document.getElementById("infomensaje");
        var z = document.getElementById("colormensaje");
        var x = "";
        var c = "";
        if (v && z) {
            x = v.value;
            c = z.value;
            Toastify({
                text: x,
                duration: 4000,
                newWindow: true,
                close: true,
                gravity: "bottom",
                position: "right",
                backgroundColor: c,
                stopOnFocus: true,
            }).showToast();
        }


    });
    cash("#html-sticky-toast").on("click", function() {
        Toastify({
            node: cash(
                '<span><strong>Remember!</strong> You can <span class="font-medium">always</span> introduce your own × HTML and <span class="font-medium">CSS</span> in the toast.<span>'
            )[0],
            duration: -1,
            newWindow: true,
            close: true,
            gravity: "bottom",
            position: "left",
            backgroundColor: "#0e2c88",
            stopOnFocus: true,
        }).showToast();
    });
})(cash);