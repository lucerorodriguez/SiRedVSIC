</br></br>
<div class="container">
<br><br>
  <a class="btn btn-primary" href="<?php echo base_url(); ?>/index.php/usuario/crearInvestigacion" role="button">Crear Investigación</a>
  </br></br>
  <table class="table" id="tb3">
    <thead>
      <tr>
        <th scope="col">#Id</th>
        <th scope="col">Título</th>
        <th scope="col">Autores</th>
        <th scope="col">Tema</th>
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
          <td><a class="btn btn-primary" href="<?php echo base_url(); ?>/index.php/Usuario/verInvestigacion/<?php echo $investigacion['id_investigacion'] ?>" role="button">Abrir</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <script>

    $(document).ready( function () {
        $('#tb3').DataTable({
          language: Lenguaje
        });
    } );
</script>
</div>