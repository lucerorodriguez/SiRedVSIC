$(document).ready( function () {
    $("#eliminar").on("click", function (e) {
   
  Swal.fire({
title: 'Seguro de eliminar todo sobre esta tesis?',
showDenyButton: true,
confirmButtonText: `Eliminar`,
denyButtonText: `Cancelar`,
}).then((result) => {
if (result.isConfirmed) {
    $.ajax({
                type: "POST",
                url: _appBaseURL + "/index.php/Usuario/eliminarTesis",
                data: {
                    _id: $("#id_t").val(),
                    _ruta: $("#rep").val()
                },
                success: function (data) {
                    if (data == 1) {
                            Swal.fire('Saved!', '', 'success')
                    }
                    else {
                            Swal.fire('Error!', '', 'success')
                    }
                }
            });


} else if (result.isDenied) {
Swal.fire('Changes are not saved', '', 'info')
}
})
});
} );