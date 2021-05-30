</br>

<div class="container">

    <div class="card w-100">
        <div class="card-header font-weight-bold font-weight-bolder text-center">
            INVESTIGACIONES
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <?php echo "<p>" . $investigacion['nombre_proyecto'] . "</p>" ?>
            </blockquote>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <label class="font-weight-bold">Objetivos de la Publicación</label>
                <input class="form-control" type="text" value="<?php echo " " . $investigacion['objetivos'] . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">Descripción de la Investigación</label>
                <input class="form-control" type="text" value="<?php echo " " . $investigacion['descripcion'] . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">Programas que incluye la Investigación</label>
                <input class="form-control" type="text" value="<?php echo " " . $investigacion['programas'] . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">Requisitos</label>
                <input class="form-control" type="text" value="<?php echo " " . $investigacion['requisitos'] . "" ?>" readonly>
            </li>
            
        </ul>
<table class="table" id="tablaArchivos">
    <thead>
      <tr>
        <th >Nombre de los Archivos</th>
         <th >
            <form action="<?php echo base_url(); ?>/index.php/usuario/gestionarArchivos" method="POST">
                <input type="text" class="form-control" name="id_investigacion" hidden value="<?php echo $investigacion['id_investigacion'] ?>">
                <button type="submit" class="btn btn-warning">Gestionar archivos</button>
            </form></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($archivos as $archivo) :
      ?>
        <tr>
          <?php echo "<td>" . $archivo['nombre'] . "</td>" ?>
          <td>
            <form action="<?php echo base_url(); ?>/index.php/usuario/downloadArchivo" method="POST">
                <input type="text" class="form-control" name="ruta" hidden value="<?php echo $archivo['ruta'] ?>">
                <button type="submit" class="btn btn-primary">Descargar</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
</table>
<div class="card-body text-right">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarModalInvestigacion">
                Eliminar
            </button>
            <a class="btn btn-info" href="<?php echo base_url(); ?>/index.php/Usuario/modificarInvestigacion/<?php echo $investigacion['id_investigacion'] ?>" role="button">Modifciar datos</a>

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="eliminarModalInvestigacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar investigación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Seguro que desea eliminar esta investigación?
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <form action="<?php echo base_url(); ?>/index.php/usuario/eliminarInvestigacion" method="POST">
                        <input type="text" class="form-control" name="id_in" hidden value="<?php echo $investigacion['id_investigacion'] ?>">
                        <button type="submit" class="btn btn-success">Aceptar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>