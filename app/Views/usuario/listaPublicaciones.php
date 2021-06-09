</br></br>
<div class="container">
<br><br>
  <a class="btn btn-primary" href="<?php echo base_url(); ?>/index.php/usuario/crearPublicacion" role="button">Crear publicación</a>
  </br></br>
  <table class="table" id="tb2">
    <thead>
      <tr class="bg-primary">
        <th scope="col">#Id</th>
        <th scope="col">Título</th>
        <th scope="col">Autores</th>
        <th scope="col">Tema</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($publicaciones as $publicacion) :
      ?>
        <tr>
          <th scope="row"> <?php echo $publicacion['id_publicacion'] ?></th>

          <?php echo "<td>" . $publicacion['titulo'] . "</td>" ?>
          <?php echo "<td>" . $publicacion['autores'] . "</td>" ?>
          <?php echo "<td>" . $publicacion['tema'] . "</td>" ?>
          <td><a class="btn btn-primary" href="<?php echo base_url(); ?>/index.php/Usuario/verPublicacion/<?php echo $publicacion['id_publicacion'] ?>" role="button">Abrir</a></td>
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