<body>

        </br></br></br>
        <div class="container" id="infoTesis">
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
                        <button type="button" class="btn btn-info" id="modificarTesis">
                                Modificar Tesis
                        </button>
                </div>
        </div>
        <div class="container" id="updateTesis" style="display:none;">
                <div class="card w-100">
                        <div class="card-header font-weight-bold font-weight-bolder text-center">
                                MODIFICAR TESIS
                        </div>
                        <form id="form_updateTesis" method="POST" enctype="multipart/form-data">
                                <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                                <input class="form-control" type="text" hidden name="id_tesis" value="<?php echo "" . $tesis['id_tesis'] . "" ?>" readonly>
                                        </li>
                                        <li class="list-group-item">
                                                <label class="font-weight-bold">Asesor</label>
                                                <input class="form-control" type="text" id="asesor" name="asesor" value="<?php echo "" . $tesis['asesor'] . "" ?>">
                                        </li>
                                        <li class="list-group-item">
                                                <label class="font-weight-bold">Tesista</label>
                                                <input class="form-control" type="text" id="tesista" name="tesista" value="<?php echo "" . $tesis['tesista'] . "" ?>">
                                        </li>
                                        <li class="list-group-item">
                                                <label class="font-weight-bold">Tema de Tesis</label>
                                                <input class="form-control" type="text" id="tema_tesis" name="tema_tesis" value="<?php echo "" . $tesis['tema_tesis'] . "" ?>">
                                        </li>
                                        <li class="list-group-item">
                                                <label class="font-weight-bold">Área de conocimiento</label>
                                                <input class="form-control" type="text" id="area_conocimiento" name="area_conocimiento" value="<?php echo "" . $tesis['area_conocimiento'] . "" ?>">
                                        </li>
                                        <li class="list-group-item">
                                                <label class="font-weight-bold">Breve Descripción</label>
                                                <input class="form-control" type="text" id="descripcion" name="descripcion" value="<?php echo "" . $tesis['descripcion'] . "" ?>">
                                        </li>
                                        <li class="list-group-item">
                                                <label class="font-weight-bold">Comentarios Adicionales</label>
                                                <input class="form-control" type="text" id="comentarios" name="comentarios" value="<?php echo "" . $tesis['comentarios'] . "" ?>">
                                        </li>
                                        <li class="list-group-item">
                                                <label class="font-weight-bold">Archivo</label>
                                                <input class="form-control" type="text" hidden name="ruta_documento_actual" value="<?php echo "" . $tesis['ruta_documento'] . "" ?>">
                                                <input class="form-control" type="text" hidden name="nombre_documento_actual" value="<?php echo "" . $tesis['nombre_documento'] . "" ?>">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $tesis['nombre_documento'] ?></label>
                                        </li>
                                        <li class="list-group-item">
                                                <label class="font-weight-bold">Si es el caso, seleccione el archivo nuevo que reemplazara el actual</label>
                                                <input type="file" id="archivo" name="archivo" onchange="validar()" />
                                        </li>
                                </ul>
                                <div class="card-body text-right">
                                        <button type="button" class="btn btn-danger" id="cancelarUpdate">Cancelar</button>
                                        <button type="button" class="btn btn-success" id="boton_GuardarCambios">Guardar</button>
                                </div>
                        </form>
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
                                        <form id="form_eliminar" action="<?php echo base_url(); ?>/index.php/usuario/eliminarTesis" method="POST">
                                                <input type="text" class="form-control" name="id_tes" hidden value="<?php echo $tesis['id_tesis'] ?>">
                                                <input type="text" class="form-control" name="r_archivo" hidden value="<?php echo $tesis['ruta_documento'] ?>">
                                                <button type="button" class="btn btn-success" id="elimininarTesis">Aceptar</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
        <script src="<?php echo base_url(); ?>/assets/js/tesis/verTesis.js"></script>
</body>