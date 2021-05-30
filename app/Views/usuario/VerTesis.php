
<body>
    
    </br></br></br>
    <div class="container">
        <form>
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
                               
   
                         </tbody>
                </table>    
        </form>
       
       
    </div>
    </body>