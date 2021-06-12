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