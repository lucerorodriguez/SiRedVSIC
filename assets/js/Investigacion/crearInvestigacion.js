$(document).ready( function () {
    $("#botn_guardarInvestigacion").on('click', function (event) {
        var data = new FormData($("#form_Investigacion")[0]);
        $.ajax({
            method: "POST",
            url:  _appBaseURL+"/usuario/guardarInvestigacion",
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
                window.location= _appBaseURL + "/Usuario/listaInvestigaciones";
            }
        });
    })
});
