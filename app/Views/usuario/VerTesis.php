
<body>
    
    </br></br></br>
    <div class="container">
        <table class="table table-hover table table-bordered">
                <thead>
                        <tr class="bg-primary">
                                <th scope="col">Titulo</th>
                                <th scope="col">Información</th>
                        </tr>
                </thead>
                <tbody>
                        <tr>
                                <th scope="row">
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Id Tesis</label>
                                </th>
                                        <td>
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $tesis['id_tesis'] ?></label>
                                        </div>
                                </td>
                        </tr>
                        <tr>
                                <th scope="row">
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Asesor</label>
                                </th>
                                        <td>
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $tesis['asesor'] ?></label>
                                        </div>
                                </td>
                        </tr>
                        <tr>
                                <th scope="row">
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Tesista</label>
                                </th>
                                        <td>
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $tesis['tesista'] ?></label>
                                        </div>
                                </td>
                        </tr>
                        <tr>
                                <th scope="row">
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Tema de Tesis</label>
                                </th>
                                        <td>
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $tesis['tema_tesis'] ?></label>
                                        </div>
                                </td>
                        </tr>
                        <tr>
                                <th scope="row">
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Área de conocimiento</label>
                                </th>
                                        <td>
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $tesis['area_conocimiento'] ?></label>
                                        </div>
                                </td>
                        </tr>
                        <tr>
                                <th scope="row">
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Breve Descripción</label>
                                </th>
                                        <td>
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $tesis['descripcion'] ?></label>
                                        </div>
                                </td>
                        </tr>
                        <tr>
                                <th scope="row">
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Comentarios Adicionales</label>
                                </th>
                                        <td>
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $tesis['comentarios'] ?></label>
                                        </div>
                                </td>
                        </tr>
                        <tr>
                                <td scope="row">
                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Archivo</label>
                                </td>
                                        <td>
                                        <?php echo $tesis['nombre_documento'] ?>
                                        <form action="<?php echo base_url(); ?>/index.php/usuario/downloadArchivo" method="POST">
                                                <input type="text" class="form-control" name="ruta" hidden value="<?php echo $tesis['ruta_documento'] ?>">
                                                <button type="submit" class="btn btn-primary">Descargar</button>
                                        </form>
                                </td>
                        </tr>

                        </tbody>
        </table>          
        <div class="card-body text-right">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarModalTesis">
                Eliminar
            </button>
            <a class="btn btn-info" href="<?php echo base_url(); ?>/index.php/Usuario/modificarTesis/<?php echo $tesis['id_tesis'] ?>" role="button">Modifciar datos</a>

        </div>
    </div>
    </div>
    <div class="modal fade" id="eliminarModalTesis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Tesis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Seguro que desea eliminar esta Tesis?
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <form action="<?php echo base_url(); ?>/index.php/usuario/eliminarTesis" method="POST">
                        <input type="text" class="form-control" name="id_in" hidden value="<?php echo $tesis['id_tesis'] ?>">
                        <button type="submit" class="btn btn-success">Aceptar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>