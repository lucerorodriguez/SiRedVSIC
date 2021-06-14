
<body>
</br></br></br>
<div class="container">

  <br> <br>
  <table class="table" id="tb4">
    <thead>
      <tr class="bg-primary">
        <th scope="col">#</th>
        <th scope="col">Nombre Proyecto</th>
        <th scope="col">Objetivos</th>
        <th scope="col">Descripción</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($investigaciones as $investigacion) :
      ?>
        <tr>
          <th scope="row"> <?php echo $investigacion['id_investigacion'] ?></th>

          <?php echo "<td>" . $investigacion['nombre_proyecto'] . "</td>" ?>
          <?php echo "<td>" . $investigacion['objetivos'] . "</td>" ?>
          <?php echo "<td>" . $investigacion['descripcion'] . "</td>" ?>
          <td><a class="btn btn-primary" href="<?php echo base_url(); ?>/index.php/investigaciones/ver/<?php echo $investigacion['id_investigacion'] ?>" role="button">Abrir</a></td>
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