$(document).ready(function () {
    var nivel = document.getElementById("sni_nivel");
    var lista = ["Candidato a investigador nacioanl", "Investigador nacional nivel I", "Investigador nacional nivel II", "Investigador nacional nivel III", "Investigador nacional emérito"];
    var valor = $("#initialVal_sni_nivel").val();
    $("#sni_nivel").prepend('<option value=' + valor + '>' + valor + '</option>');
    $.each(lista, function (index, ele) {
        if (valor != ele) {
            option = document.createElement("option");
            option.value = ele;
            option.text = ele;
            nivel.appendChild(option);
        }
    });
});

function validar() {
    var contenido = $("#archivo").val();
    var extenciones = /(.jpg|.jpeg|.png)$/i;
    if (!extenciones.exec(contenido)) {
        alert("Por favor asegurate de seleccionar un archivo con extension .jpg|.jpeg|.png ");
        $("#archivo").val("");
        $("#guardarFoto").prop('disabled', true);
    } else {
        $("#guardarFoto").prop('disabled', false);
    }
}

$("#guardarFoto").on('click', function (event) {
    var data = new FormData($("#formulario")[0]);
    if ($("#archivo").val() != "") {
        $.ajax({
            method: "POST",
            url: _appBaseURL + "/usuario/AgregarFoto",
            data: data,
            contentType: false,
            processData: false,
            success: function (data) {
                location.reload();
            }
        });
    }
})

$("#cerrar_modalX").on('click', function (event) {
    $("#archivo").val("");
})

$("#cerrar_modalCancelar").on('click', function (event) {
    $("#archivo").val("");
})

$("#modificarPerfil").on('click', function (event) {
    var div = document.getElementById('update_perfil');
    div.style.display = '';
    var div = document.getElementById('ver_perfil');
    div.style.display = 'none';
})

$("#cancelar_updatePerfil").on('click', function (event) {
    location.reload();
})


$("#guardar_cambiosPerfil").on('click', function (event) {
    var data = new FormData($("#formularioCambios")[0]);
    $.ajax({
        method: "POST",
        url: _appBaseURL + "/usuario/updatePerfil",
        data: data,
        contentType: false,
        processData: false,
        success: function (data) {
            setTimeout(alerta(), 8000);
            function alerta() {
                Swal.fire(
                    'Echo!',
                    'Los cambios fueron guardados correctamente!'
                )
            }
            location.reload();
        }
    });
})