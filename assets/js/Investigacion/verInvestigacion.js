
$(document).ready(function () {

    $("#eliminar_Investigacion").on('click', function (event) {
        var data = new FormData($("#form_EliminarInvestigacion")[0]);
        $.ajax({
            method: "POST",
            url: _appBaseURL + "/usuario/eliminarInvestigacion",
            data: data,
            contentType: false,
            processData: false,
            success: function (data) {
                setTimeout(alerta(), 8000);
                function alerta() {
                    Swal.fire(
                        'Echo!',
                        'Se elimino la Investigacion!'
                    )
                }
                window.location.replace(_appBaseURL + "/usuario/listaInvestigaciones");
            }
        });
    })

    $("#modificar_Investigacion").on('click', function (event) {
        var div = document.getElementById('update_Investigacion');
        div.style.display = '';
        var div = document.getElementById('ver_Investigacion');
        div.style.display = 'none';
        var div = document.getElementById('gestor_Archivos');
        div.style.display = 'none';
    })
    $("#Gestionar_archivos").on('click', function (event) {
        var div = document.getElementById('update_Investigacion');
        div.style.display = 'none';
        var div = document.getElementById('ver_Investigacion');
        div.style.display = 'none';
        var div = document.getElementById('gestor_Archivos');
        div.style.display = '';
    })
    $("#botn_CancelarCambiosInvestigacion").on('click', function (event) {
        location.reload();
    })
    $("#cancelarUpdate").on('click', function (event) {
        location.reload();
    })

    $("#botn_modificarInvestigacion").on('click', function (event) {
        var data = new FormData($("#form_ActualizarInvestigacion")[0]);
        $.ajax({
            method: "POST",
            url: _appBaseURL + "/usuario/updateInvestigacion",
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

$("#guardar_ArchivosGestor").on('click', function (event) {
    var archivos = document.getElementById('new_archivos').files;
    if (archivos.length > 0) {
        var data = new FormData($("#nuevos_archivos")[0]);
        $.ajax({
            method: "POST",
            url: _appBaseURL + "/usuario/guardarArchivos",
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
                location.reload();
            }
        });
    }
})

function EliminarArchivo(row, ruta) {
    var fila = row.parentNode.parentNode;
    data = {
        ruta: ruta
    }
    $.ajax({
        method: "POST",
        url: _appBaseURL + "/usuario/eliminarArchivo",
        data: data,
        success: function (data) {
            setTimeout(alerta(), 8000);
            function alerta() {
                Swal.fire(
                    'Echo!',
                    'Se elimino la Investigacion!'
                )
            }
            fila.remove();
        }
    });
}

$("#salir_gestorArchivos").on('click', function (event) {
    location.reload();
})
