var list_autores = [];

$(document).ready(function () {
    var nombres = [];
    $.ajax({
        method: "GET",
        url: _appBaseURL + "/usuario/getAutores",
        success: function (data) {
            $.each(data.autores, function (index, item) {
                nombres.push(item.nombre);
            });
        }
    });
    $("#nombre").autocomplete({
        source: nombres,
        select: function (event, nombres) {
            $.ajax({
                method: "POST",
                url: _appBaseURL + "/usuario/autorPorNombre",
                data: {
                    nombre: nombres.item.value,
                },
                success: function (data) {
                    $("#nombre").val(data[0].nombre);

                    /* 
                    $.each(data.autor, function (index, item) {
                        $("#nombres").val(item.nombre);
                        $("#apellidos").val(item.apellidos);
                    });
                    */
                }
            });

        }
    });

    $("#boton_crearPublicacion").on('click', function (event) {
        var data = new FormData($("#form_crearPublicacion")[0]);
        $.ajax({
            method: "POST",
            url: _appBaseURL + "/usuario/guardarPublicacion",
            data: data,
            contentType: false,
            processData: false,
            success: function (data) {
                setTimeout(alerta(), 8000);
                function alerta() {
                    Swal.fire(
                        'Echo!',
                        'Se guardo la informacion!'
                    )
                }
                window.location = _appBaseURL + "/Usuario/listaPublicaciones";
            }
        });
    })

});



$("#add_autor").on('click', function (event) {
    event.preventDefault;
    var valor = document.getElementById("nombre").value;
    if (valor != "") {
        var Palabras = valor.split(' ');
        valor = '';
        for (let l = 0; l < Palabras.length; l++) {
            var convertida = Palabras[l].charAt(0).toUpperCase() + Palabras[l].slice(1);
            valor += convertida;
            if ((l + 1) < Palabras.length) {
                valor += ' ';
            }
        }
        var bandera = 0;
        var checkNombres = document.getElementById("list-autores").getElementsByTagName("li");
        for (var y = 0; y < checkNombres.length; y++) {
            if (valor == checkNombres[y].innerText) {
                bandera++;
            }
        }
        if (bandera == 0) {
            var li = document.createElement('li');
            li.innerHTML = "<button onclick='eliminar(this)' type='button' class='btn bi bi-x-square'></button>";
            var text = document.createTextNode(valor);
            li.appendChild(text);
            document.getElementById("list-autores").appendChild(li);
        }
        list_autores = [];
        var el = document.getElementById("list-autores").getElementsByTagName("li");
        for (var i = 0; i < el.length; i++) {
            list_autores.push(el[i].innerText);
        }
        $("#autores").val(list_autores);
    }

    $("#nombre").val("");
})

function eliminar(elemento) {
    elemento.parentNode.remove();
    list_autores = [];
    var el = document.getElementById("list-autores").getElementsByTagName("li");
    for (var i = 0; i < el.length; i++) {
        list_autores.push(el[i].innerText);
    }
    $("#autores").val(list_autores);
}