</br>

<div class="container" id="info_Publicacion">

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
                if ($publicacion['autores'] != "") {
                    $array_nombres = explode(",", $publicacion['autores']);
                    $nombres = $array_nombres[0];
                    for ($i = 1; $i < count($array_nombres); $i++) {
                        $nombres = $nombres . ", " . $array_nombres[$i];
                    }
                }
                ?>
                <input class="form-control" type="text" value="<?php echo "" . $nombres . "" ?>" readonly>
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
            <button type="button" class="btn btn-info" id="modificarPublicacion">Modificar Publicacion</button>
        </div>
    </div>


</div>
<div class="container" id="updatePublicacion" style="display:none;">
    <div class="card w-100">
        <div class="card-header font-weight-bold font-weight-bolder text-center">
            MODIFICAR PUBLICACIÓN
        </div>
        <form id="form_updatePublicacion" method="POST">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <label class="font-weight-bold">Id de la publicación</label>
                    <input class="form-control" type="text" name="id_publicacion" value="<?php echo "" . $publicacion['id_publicacion'] . "" ?>" readonly>
                </li>
                <li class="list-group-item">
                    <label class="font-weight-bold">Titulo</label>
                    <input class="form-control" type="text" name="titulo" value="<?php echo "" . $publicacion['titulo'] . "" ?>">
                </li>
                <input class="form-control" type="text" name="autores_publicacion" id="autores_publicacion" value="<?php echo "" . $publicacion['autores'] . "" ?>" hidden>


                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label class="font-weight-bold">Nombre de autor</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Introducir el nombre del autor.">
                    </div>

                    <div class="form-group col-md-2">
                        </br>
                        <button type="button" class="btn btn-primary" id="add_autor">Agregar Autor</button>
                    </div>
                    <div class="form-group col-md-5">
                        <label class="font-weight-bold">Autores</label>
                        <ul id="list-autores" style="list-style: none;"></ul>
                    </div>
                    <input type="text" class="form-control" name="autores" id="autores" value="" hidden>
                </div>

                <li class="list-group-item">
                    <label class="font-weight-bold">Tema</label>
                    <input class="form-control" type="text" name="tema" value="<?php echo "" . $publicacion['tema'] . "" ?>">
                </li>
                <li class="list-group-item">
                    <label class="font-weight-bold">Albitraje</label>
                    <input class="form-control" type="text" name="albitraje" value="<?php echo "" . $publicacion['albitraje'] . "" ?>">
                </li>
                <li class="list-group-item">
                    <label class="font-weight-bold">Indexación</label>
                    <input class="form-control" type="text" name="indexacion" value="<?php echo "" . $publicacion['indexacion'] . "" ?>">
                </li>
                <li class="list-group-item">
                    <label class="font-weight-bold">Descripción</label>
                    <input class="form-control" type="text" name="descripcion" value="<?php echo "" . $publicacion['descripcion'] . "" ?>">
                </li>
                <li class="list-group-item">
                    <div class="form-group col-md-3">
                        <label class="font-weight-bold">Fecha</label>
                        <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo date('Y-m-d', strtotime($publicacion['fecha'])) ?>">
                    </div>
                </li>
                <li class="list-group-item">
                    <label class="font-weight-bold">URL</label>
                    <input class="form-control" type="text" name="url" value="<?php echo "" . $publicacion['url'] . "" ?>">
                </li>

            </ul>
            <div class="card-body text-right">
                <button type="button" class="btn btn-danger" id="cancelarUpdate">Cancelar</button>
                <button type="button" class="btn btn-success" id="boton_GuardarCambios">Guardar</button>
            </div>
        </form>
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
                <form id="form_eliminarPublicacion" method="POST">
                    <input type="text" class="form-control" name="id_Publi" hidden value="<?php echo $publicacion['id_publicacion'] ?>">
                    <button type="button" class="btn btn-success" id="boton_EliminarPublicacion">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>/assets/js/publicacion/verPublicacion.js"></script>