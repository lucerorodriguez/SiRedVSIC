
$(document).ready(function () {
  var tesis = $("#asesor").val();
  var tesista = $("#tesista").val();
  var tema_tesis = $("#tema_tesis").val();
  var area_conocimiento = $("#area_conocimiento").val();
  var descripcion = $("#descripcion").val();
  var comentarios = $("#comentarios").val();
  var comentarios = $("#comentarios").val();

  $("#elimininarTesis").on('click', function (event) {
    var data = new FormData($("#form_eliminar")[0]);
    $.ajax({
      method: "POST",
      url: _appBaseURL + "/usuario/eliminarTesis",
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
        window.location.replace(_appBaseURL + "/usuario/listaTesis");
      }
    });
  })

  $("#modificarTesis").on('click', function (event) {
    var div = document.getElementById('updateTesis');
    div.style.display = '';
    var div = document.getElementById('infoTesis');
    div.style.display = 'none';
  })
  $("#cancelarUpdate").on('click', function (event) {
    var div = document.getElementById('updateTesis');
    div.style.display = 'none';
    var div = document.getElementById('infoTesis');
    div.style.display = '';
    $("#asesor").val(tesis);
    $("#tesista").val(tesista);
    $("#tema_tesis").val(tema_tesis);
    $("#area_conocimiento").val(area_conocimiento);
    $("#descripcion").val(descripcion);
    $("#comentarios").val(comentarios);
    $("#archivo").val("");
  })

  $("#boton_GuardarCambios").on('click', function (event) {
    var data = new FormData($("#form_updateTesis")[0]);
    $.ajax({
      method: "POST",
      url: _appBaseURL + "/usuario/updateTesis",
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

function validar() {
  var contenido = $("#archivo").val();
  var extenciones = /(.DOC|.doc|.docx|.PDF|.pdf)$/i;
  if (!extenciones.exec(contenido)) {
    alert("Por favor asegurate de seleccionar un archivo con extension .doc o .pdf");
    $("#archivo").val("");
  }
}