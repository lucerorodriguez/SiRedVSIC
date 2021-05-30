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
                        <li class="list-group-item">
                                <label class="font-weight-bold">Autores</label>
                                <input class="form-control" type="text" name="autores" value="<?php echo "" . $publicacion['autores'] . "" ?>">
                        </li>
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
                                <div class="form-row">



                                        <div class="form-group col-md-1">
                                                <label class="font-weight-bold">Fecha</label>
                                                <input type="text" class="form-control" name="dia" value=" <?php echo "" . $publicacion['dia'] . "" ?>">
                                        </div>
                                        <div class="form-group col-md-1">
                                                <label class="font-weight-bold">de </label>
                                                <input type="text" class="form-control" name="mes" value="<?php echo "" . $publicacion['mes'] . "" ?>">
                                        </div>
                                        <div class="form-group col-md-1">
                                                <label class="font-weight-bold">Creación</label>
                                                <input type="text" class="form-control" name="anio" value="<?php echo "" . $publicacion['anio'] . "" ?>">
                                        </div>
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