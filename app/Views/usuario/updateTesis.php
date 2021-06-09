</br>

<div class="container">

        <div class="card w-100">
                <div class="card-header font-weight-bold font-weight-bolder text-center">
                       MODIFICAR TESIS
                </div>
                <form action="<?php echo base_url(); ?>/index.php/Usuario/updateTesis" method="POST" enctype="multipart/form-data">
                <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                                <input class="form-control" type="text" hidden name="id_tesis" value="<?php echo "" . $tesis['id_tesis']."" ?>" readonly>
                        </li>
                        <li class="list-group-item">
                                <label class="font-weight-bold">Asesor</label>
                                <input class="form-control" type="text" name="asesor" value="<?php echo "" . $tesis['asesor'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                                <label class="font-weight-bold">Tesista</label>
                                <input class="form-control" type="text" name="tesista" value="<?php echo "" . $tesis['tesista'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                                <label class="font-weight-bold">Tema de Tesis</label>
                                <input class="form-control" type="text" name="tema_tesis" value="<?php echo "" . $tesis['tema_tesis'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                                <label class="font-weight-bold">Área de conocimiento</label>
                                <input class="form-control" type="text" name="area_conocimiento" value="<?php echo "" . $tesis['area_conocimiento'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                                <label class="font-weight-bold">Breve Descripción</label>
                                <input class="form-control" type="text" name="descripcion" value="<?php echo "" . $tesis['descripcion'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                                <label class="font-weight-bold">Comentarios Adicionales</label>
                                <input class="form-control" type="text" name="comentarios" value="<?php echo "" . $tesis['comentarios'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                                <label class="font-weight-bold">Archivo</label>
                                <input class="form-control" type="text" hidden name="ruta_documento_actual" value="<?php echo "" . $tesis['ruta_documento'] . "" ?>">
                                <input class="form-control" type="text" hidden name="nombre_documento_actual" value="<?php echo "" . $tesis['nombre_documento'] . "" ?>">
                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $tesis['nombre_documento'] ?></label>
                        </li>
                        <li class="list-group-item">
                                <label class="font-weight-bold">Si es el caso, seleccione el archivo nuevo que reemplazara el actual</label>
                                <input type="file" name="archivo"/>
                        </li>
                        
                </ul>
                <div class="card-body text-right">
                <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Usuario/listatesis" role="button">Cancelar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
                </div>
                </form>
        </div>
</div>