</br>

<div class="container">

    <div class="card w-100">
        <div class="card-header font-weight-bold font-weight-bolder text-center">
            PUBLICACIÓN
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <?php echo "<p>" . $publicacion['titulo'] . "</p>" ?>
            </blockquote>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <label class="font-weight-bold">Autores</label>
                <?php
                $nombres = "";
                if($publicacion['autores'] != ""){
                    $array_nombres = explode(",", $publicacion['autores']);
                    $nombres = $array_nombres[0];
                    for ($i = 1; $i < count($array_nombres); $i++) {
                        $nombres = $nombres.", ".$array_nombres[$i];
                    }
                }
                ?>
                <input class="form-control" type="text" value="<?php echo "" .$nombres . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">Tema</label>
                <input class="form-control" type="text" value="<?php echo "" . $publicacion['tema'] . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">Albitraje</label>
                <input class="form-control" type="text" value="<?php echo "" . $publicacion['albitraje'] . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">Indexación</label>
                <input class="form-control" type="text" value="<?php echo "" . $publicacion['indexacion'] . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">Descripción</label>
                <input class="form-control" type="text" value="<?php echo "" . $publicacion['descripcion'] . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">Fecha</label>
                <input class="form-control" type="text" value="<?php echo "" . $publicacion['fecha'] . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">URL</label>
                <input class="form-control" type="text" value="<?php echo "" . $publicacion['url'] . "" ?>" readonly>
            </li>

        </ul>
        <div class="card-body text-right">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarModal">
                Eliminar
            </button>
            <a class="btn btn-info" href="<?php echo base_url(); ?>/index.php/Usuario/modificarPublicacion/<?php echo $publicacion['id_publicacion'] ?>" role="button">Modifciar datos</a>

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
                    ¿Seguro que desea eliminar esta publicacion?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-success" href="<?php echo base_url(); ?>/index.php/Usuario/eliminar/<?php echo $publicacion['id_publicacion'] ?>" role="button">Aceptar</a>
                </div>
            </div>
        </div>
    </div>
</div>