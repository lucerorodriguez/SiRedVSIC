$(document).ready(function () {
    $("#eliminarsitio").on('click', function (event) {
        var id = $("#id_sitioEliminar").val();
        var datos = {
            id_sitio: id
        }
        $.ajax({
            method: "POST",
            url: _appBaseURL + "/usuario/eliminarSitio",
            data: datos,
            success: function (data) {
                setTimeout(alerta(), 8000);
                function alerta() {
                    Swal.fire(
                        'Echo!',
                        'Se elimino la informacion!'
                    )
                }
                window.location.replace(_appBaseURL + "/usuario/listaSitios");
            }
        });
    })

    $("#boton_UpdateDatos").on('click', function (event) {
        var div = document.getElementById('updateSitio');
        div.style.display = '';
        var div = document.getElementById('infoSitio');
        div.style.display = 'none';
    })
    $("#cancelar_UpdateDatos").on('click', function (event) {
        location.reload();
    })

    $("#boton_guardarCambios").on('click', function (event) {
        var data = new FormData($("#form_cambiarDatos")[0]);
        $.ajax({
          method: "POST",
          url: _appBaseURL + "/usuario/updateSitio",
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
});


