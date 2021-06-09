<html>

<head>
<title>Publicaciones</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- <link rel="stylesheet" href="../public/assets/css/style.css"> -->

</head>

<body>


</br></br></br>
<div class="container">

 
  <br><br>
  <table class="table" id="tb1">
    <thead>
      <tr class="bg-primary">
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Breve Descripción</th>
        <th scope="col">URL</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($sitios as $sitio) :
      ?>
        <tr>
          <th scope="row"> <?php echo $sitio['id_sitio'] ?></th>

          <?php echo "<td>" . $sitio['nombre_sitio'] . "</td>" ?>
          <?php echo "<td>" . $sitio['descripcion'] . "</td>" ?>
          <?php echo "<td>" . $sitio['url'] . "</td>" ?>
          <td><a class="btn btn-primary" href="http://localhost/SiRedVSIC/index.php/sitiosinteres/ver/<?php echo $sitio['id_sitio'] ?>" role="button">Abrir</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>



</body>
<script>
  $(document).ready( function () {
      $('#tb1').DataTable({
        language: Lenguaje
      });
  } );
</script>

</html>
