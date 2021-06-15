$(document).ready( function () {
    $("#guardarFoto").prop('disabled', true);
});

function validar(){
    var contenido = $("#archivo").val();
    var extenciones = /(.jpg|.jpeg|.png)$/i;
    if(!extenciones.exec(contenido)){
        alert("Por favor asegurate de seleccionar un archivo con extension .jpg|.jpeg|.png ");
        $("#archivo").val("");
        $("#guardarFoto").prop('disabled', true);
    }else {
        $("#guardarFoto").prop('disabled', false);
    }
}

$("#guardarFoto").on('click', function (event) {
    var data = new FormData($("#formulario")[0]);
    $.ajax({
        method: "POST",
        url:  _appBaseURL+"/usuario/AgregarFoto",
        data: data,
        contentType: false,
        processData: false,
        success: function (data) {
            location.reload();
        }
    });
})

$("#guardarCambios").on('click', function (event) {
    var data = new FormData($("#formularioCambios")[0]);
    $.ajax({
        method: "POST",
        url:  _appBaseURL+"/usuario/updatePerfil",
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

$("#cancelarCambios").on('click', function (event) {
    $("#form-1").val($("#1").val());
    $("#form-2").val($("#2").val());
    $("#form-3").val($("#3").val());
    $("#form-4").val($("#4").val());
    $("#form-5").val($("#5").val());
    $("#form-6").val($("#6").val());
    $("#form-7").val($("#7").val());
    $("#form-8").val($("#8").val());
    $("#form-9").val($("#9").val());
})