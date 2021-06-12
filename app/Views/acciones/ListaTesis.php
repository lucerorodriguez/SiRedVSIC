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

    $(document).ready( function () {
        $('#tb4').DataTable({
          language: Lenguaje
        });
    } );
</script>
</body>