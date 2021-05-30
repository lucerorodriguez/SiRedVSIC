
<div class="container">
<br><br><br><br>
    <form action="<?php echo base_url(); ?>/index.php/usuario/guardarArchivos" method="POST" enctype="multipart/form-data">
        <input class="form-control" type="text" name="id_investigacion" value="<?php echo "" . $id_investigacion."" ?>"  hidden>
        <div class="form-group">
            <label for="formFileMultiple" class="form-label font-weight-bold">Seleccione los archivos que desea subir a la plataforma</label>
            <input type="file" name="archivo[]" multiple/>
        <button type="submit" class="btn btn-primary">Guardar</button>

       </div>
    </form>
    <table class="table" id="tablaArchivos">
    <thead>
      <tr>
        <th >Nombre de los Archivos</th>
         <th >Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($archivos as $archivo) :
      ?>
        <tr>
          <?php echo "<td>" . $archivo['nombre'] . "</td>" ?>
          <td>
            <form action="<?php echo base_url(); ?>/index.php/usuario/eliminarArchivo" method="POST">
                <input type="text" class="form-control" name="id_in" hidden value="<?php echo "" . $id_investigacion."" ?>">
                <input type="text" class="form-control" name="ruta" hidden value="<?php echo $archivo['ruta'] ?>">
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
</table>
</div>

</br>
 <script src="<?php echo base_url(); ?>/assets/js/usuario/eliminarArchivo.js"></script>