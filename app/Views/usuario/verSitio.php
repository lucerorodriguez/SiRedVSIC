</br>

<div class="container">

    <div class="card w-100">
        <div class="card-header font-weight-bold font-weight-bolder text-center">
            SITIO
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <?php echo "<p>" . $sitio['nombre_sitio'] . "</p>" ?>
            </blockquote>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <label class="font-weight-bold">Autores</label>
                <input class="form-control" type="text" value="<?php echo "" . $sitio['categoria'] . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">Tema</label>
                <input class="form-control" type="text" value="<?php echo "" . $sitio['descripcion'] . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">Albitraje</label>
                <input class="form-control" type="text" value="<?php echo "" . $sitio['url'] . "" ?>" readonly>
            </li>

        </ul>
        <div class="card-body text-right">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarModal">
                Eliminar
            </button>
            <a class="btn btn-info" href="<?php echo base_url(); ?>/index.php/Usuario/modificarSitio/<?php echo $sitio['id_sitio'] ?>" role="button">Modifciar datos</a>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar publicacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Seguro que desea eliminar este Sitio?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-success" href="<?php echo base_url(); ?>/index.php/Usuario/eliminarSitio/<?php echo $sitio['id_sitio'] ?>" role="button">Aceptar</a>
                </div>
            </div>
        </div>
    </div>
</div>