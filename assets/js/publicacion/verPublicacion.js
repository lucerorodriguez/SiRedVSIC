var list_autores = [];

$(document).ready(function () {
    listaAutores();
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
});

$("#add_autor").on('click', function (event) {
    event.preventDefault;
    var valor = document.getElementById("nombre").value;
    if (valor != "") {
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
    $("#nombre").val("");
})

$("#boton_EliminarPublicacion").on('click', function (event) {
    var data = new FormData($("#form_eliminarPublicacion")[0]);
    $.ajax({
        method: "POST",
        url: _appBaseURL + "/usuario/eliminarPublicacion",
        data: data,
        contentType: false,
        processData: false,
        success: function (data) {
            setTimeout(alerta(), 8000);
            function alerta() {
                Swal.fire(
                    'Echo!',
                    'Se elimino la informacion!'
                )
            }
            window.location.replace(_appBaseURL + "/usuario/listaPublicaciones");
        }
    });
})

$("#modificarPublicacion").on('click', function (event) {
    var info = document.getElementById('info_Publicacion');
    info.style.display = 'none';
    var update = document.getElementById('updatePublicacion');
    update.style.display = '';

})
$("#cancelarUpdate").on('click', function (event) {
    location.reload();
})

$("#boton_GuardarCambios").on('click', function (event) {
    var data = new FormData($("#form_updatePublicacion")[0]);
    $.ajax({
      method: "POST",
      url: _appBaseURL + "/usuario/updatePublicacion",
      data: data,
      contentType: false,
      processData: false,
      success: function (data) {
        setTimeout(alerta(), 8000);
        function alerta() {
          Swal.fire(
            'Echo!',
            'Se guardaron los cambios!'
          )
        }
        location.reload();
      }
    });
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

function listaAutores() {
    var cadena = document.getElementById("autores_publicacion").value;
    var arrayAutores = cadena.split(",");

    if (cadena != "") {
        for (var i = 0; i < arrayAutores.length; i++) {
            var li = document.createElement('li');
            li.innerHTML = "<button onclick='eliminar(this)' type='button' class='btn bi bi-x-square'></button>";
            var text = document.createTextNode(arrayAutores[i]);
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
}