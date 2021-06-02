<html>

<head>
<title>Tesis</title>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- <link rel="stylesheet" href="../public/assets/css/style.css"> -->

</head>

<body>


</br></br></br>
<div class="container">
  <br> <br>
  <table class="table" id="tb4">
    <thead>
      <tr class="bg-primary">
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tema</th>
        <th scope="col">Descripción</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($tesis as $tes) :
      ?>
        <tr>
          <th scope="row"> <?php echo $tes['id_tesis'] ?></th>

          <?php echo "<td>" . $tes['tesista'] . "</td>" ?>
          <?php echo "<td>" . $tes['tema_tesis'] . "</td>" ?>
          <?php echo "<td>" . $tes['descripcion'] . "</td>" ?>
          <td><a class="btn btn-primary" href="http://localhost/SiRedVSIC/index.php/tesis/ver/<?php echo $tes['id_tesis'] ?>" role="button">Abrir</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  
</div>

<script>
const Lenguaje = {
    "sProcessing": "Procesando...",
    "sLengthMenu": "Mostrar _MENU_ registros",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable": "Ningún dato disponible en esta tabla =(",
    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix": "",
    "sSearch": "Buscar:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad"
    }
}
    $(document).ready( function () {
        $('#tb4').DataTable({
          language: Lenguaje
        });
    } );
</script>

</body>

</html>