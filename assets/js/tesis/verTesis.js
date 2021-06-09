$(document).ready( function () {
    $("#eliminar").on("click", function (e) {
   
  Swal.fire({
title: 'Seguro de eliminar todo sobre esta tesis?',
showDenyButton: true,
confirmButtonText: `Eliminar`,
denyButtonText: `Cancelar`,
}).then((result) => {
if (result.isConfirmed) {
    Swal.fire('Changes are not saved', '', 'info')
} else if (result.isDenied) {
Swal.fire('Changes are not saved', '', 'info')
}
})
});
} );