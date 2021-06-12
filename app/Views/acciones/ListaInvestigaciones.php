
<body>
</br></br></br>
<div class="container">

  <form action="<?php echo base_url(); ?>/index.php/Investigaciones/busqueda" method="POST" class="form">
    <div class="form-row align-items-center">
      <div class="col-sm-3 my-1">
        <input type="text" name="oracion" value="" class="form-control" placeholder="escribe algo...">
      </div>
      <div class="col-auto my-1">
        <label class="mr-sm-2" for="inlineFormCustomSelect">Filtrar</label>
        <select class="custom-select mr-sm-2" name="filtro" id="inlineFormCustomSelect">
          <option selected>Selecciona una opción...</option>
          <option value="nombre_proyecto">Nombre</option>
          <option value="objetivos">Objetivos</option>
          <option value="descripcion">Descripción</option>
        </select>
      </div>
      <div class="col-auto my-1">
        <button class="btn btn-primary">Buscar</button>
      </div>
    </div>
  </form>
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