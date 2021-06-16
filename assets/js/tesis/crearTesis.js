$(document).ready( function () {
    $("#saveTesis").on('click', function (event) {
        var data = new FormData($("#form_tesis")[0]);
        $.ajax({
            method: "POST",
            url:  _appBaseURL+"/usuario/saveTesis",
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
                window.location= _appBaseURL + "/Usuario/listaTesis";
            }
        });
    })
});

function validar(){
    var contenido = $("#archivo").val();
    var extenciones = /(.DOC|.doc|.docx|.PDF|.pdf)$/i;
    if(!extenciones.exec(contenido)){
        alert("Por favor asegurate de seleccionar un archivo con extension .doc o .pdf");
        $("#archivo").val("");
    }
}
