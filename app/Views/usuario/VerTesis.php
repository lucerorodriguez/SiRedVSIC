
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
       
    </div>
    </body>