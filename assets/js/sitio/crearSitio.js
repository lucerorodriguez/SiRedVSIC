$(document).ready( function () {
    $("#button_crearSitio").on('click', function (event) {
        var inputs = new FormData($("#form_crearSitio")[0]);
        $.ajax({
            method: "POST",
            url:  _appBaseURL+"/usuario/guardarSitio",
            data: inputs,
            contentType: false,
            processData: false,
            success: function (data) {
                setTimeout(alerta(), 8000);
                window.location= _appBaseURL + "/Usuario/listaSitios";
            }
        });
    })
});
function alerta() {
    Swal.fire(
        'Echo!',
        'Se guardo la información!'
      )
}