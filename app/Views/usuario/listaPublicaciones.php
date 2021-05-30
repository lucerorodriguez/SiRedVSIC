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
          <td><a class="btn btn-primary" href="http://localhost/cursoCodeIgniter-Udemy/index.php/Usuario/verPublicacion/<?php echo $publicacion['id_publicacion'] ?>" role="button">Abrir</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

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
        $('#tb2').DataTable({
          language: Lenguaje
        });
    } );
</script>
</div>