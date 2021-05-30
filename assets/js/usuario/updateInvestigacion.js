  $(document).ready( function () {
        console.log("hhdhdh");
        
});

   $("#eliminar").on("click", function (e) {
        $ruta = './uploads/13/'
      Swal.fire({
  title: 'Do you want to save the changes?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: `Save`,
  denyButtonText: `Don't save`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire('Saved!', '', 'success')

  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }
})
	});