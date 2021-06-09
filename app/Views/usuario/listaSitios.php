</br></br>
<div class="container">
<br><br>
  <a class="btn btn-primary" href="<?php echo base_url(); ?>/index.php/usuario/crearSitio" role="button">Crear Sitio de Interés</a>
  </br></br>
  <table class="table" id="tb2">
    <thead>
      <tr class="bg-primary">
        <th scope="col">#</th>
        <th scope="col">Nombre del Sitio</th>
        <th scope="col">Descripción</th>
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
         <td><a class="btn btn-primary" href="<?php echo base_url(); ?>/index.php/Usuario/verSitio/<?php echo $sitio['id_sitio'] ?>" role="button">Abrir</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <script>

    $(document).ready( function () {
        $('#tb2').DataTable({
          language: Lenguaje
        });
    } );
</script>
</div>