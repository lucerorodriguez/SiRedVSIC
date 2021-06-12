</br>

<div class="container">

        <div class="card w-100">
                <div class="card-header font-weight-bold font-weight-bolder text-center">
                       MODIFICAR PUBLICACIÓN
                </div>
                <form action="<?php echo base_url(); ?>/index.php/Usuario/updatePublicacion" method="POST">
                <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                                <label class="font-weight-bold">Id de la publicación</label>
                                <input class="form-control" type="text" name="id_publicacion" value="<?php echo "" . $publicacion['id_publicacion']."" ?>" readonly>
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
                <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Usuario/listaPublicaciones" role="button">Cancelar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
                </div>
                </form>
        </div>
</div>
<script src="<?php echo base_url(); ?>/assets/js/usuario/updatePublicacion.js"></script>