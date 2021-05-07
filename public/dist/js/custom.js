$(document).ready(function() {
    $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'

    });

    ClassicEditor
        .create(document.querySelector('#extract'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#body'))
        .catch(error => {
            console.error(error);
        });

    document.getElementById("file").addEventListener('change', cambiarImagen);

    function cambiarImagen(event) {
        var file = event.target.files[0];
        input = $(this)[0];
        var imgPath = input.value;
        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

        if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            var reader = new FileReader();

            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        } else {

            let src_img = document.getElementById("picture").src;
            document.getElementById("picture").setAttribute('src', src_img);

            Toastify({
                text: 'Formato de archivo invalido  ',
                duration: 1500,
                newWindow: true,
                close: false,
                gravity: "bottom",
                position: "right",
                backgroundColor: '#f44336',
                stopOnFocus: true,
            }).showToast();


        }
    }

    function select(el) {
        img = el;
    }


    contaImg()

    function contaImg() {
        let imagenes_creadas = document.querySelectorAll(".imagenTrack").length;

        document.getElementById("bulkfilesNum").value = imagenes_creadas;


        if (imagenes_creadas > 5) {

            Toastify({
                text: 'El Limite de Imagenes es 5',
                duration: 2000,
                newWindow: true,
                close: false,
                gravity: "bottom",
                position: "right",
                backgroundColor: '#f44336',
                stopOnFocus: true,
            }).showToast();

            let imagenes_creadas = document.getElementsByClassName("imagenTrack");
            $(imagenes_creadas).remove();
            document.getElementById('attach').value = null;
            document.getElementById("bulkfilesNum").value = '';
        }
    }


    var img;
    var input;

    $("#attach").on('change', function() {
        var countFiles = $(this)[0].files.length;

        if (countFiles > 0) { $('#text_img_drop').addClass('hidden'); }
        input = $(this)[0];

        var imgPath = input.value;
        img = imgPath;
        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        var image_holder = $("#preview_img");
        // image_holder.empty();
        if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
                for (var i = 0; i < countFiles; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $(image_holder).append(
                            '<div class="w-40 h-40 relative image-fit cursor-pointer zoom-in m-3 imagenTrack">' +
                            '<img  class="rounded-md" src="' + e.target.result + '"  onclick="select($(this))">' +
                            '<div title="Remover Esta Imagen?" class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 -mt-2 -mr-2 text-white rounded-full tooltip bg-theme-6 remove_field1"> <i data-feather="x" class="w-4 h-4" ></i> </div>' +
                            '</div>'
                        );
                        feather.replace();
                        contaImg();
                    }
                    image_holder.show();
                    reader.readAsDataURL($(this)[0].files[i]);
                }
            } else {
                Toastify({
                    text: 'Navegador no soportado  ',
                    duration: 1500,
                    newWindow: true,
                    close: false,
                    gravity: "bottom",
                    position: "right",
                    backgroundColor: '#f44336',
                    stopOnFocus: true,
                }).showToast();
            }
        } else {

            Toastify({
                text: 'Formato de archivo invalido  ',
                duration: 1500,
                newWindow: true,
                close: false,
                gravity: "bottom",
                position: "right",
                backgroundColor: '#f44336',
                stopOnFocus: true,
            }).showToast();

            let imagenes_creadas = document.getElementsByClassName("imagenTrack");
            $(imagenes_creadas).remove();
            $('#text_img_drop').removeClass('hidden');
        }
    });

    $(preview_img).on("click", ".remove_field1", function(e) { //user click on remove text

        e.preventDefault();
        $(this).parent('div').remove();
        // img.val = '';
        // input.value = null;
        let imagenes_creadas = document.getElementsByClassName("imagenTrack").length;

        if (imagenes_creadas == 0) {
            $('#text_img_drop').removeClass('hidden');
        }
        contaImg();
    });


});
