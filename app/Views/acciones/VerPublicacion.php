
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
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Id publicacion</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['id_publicacion'] ?></label>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Titulo</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['titulo'] ?></label>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Fecha de creacion</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo "".$publicacion['fecha']."" ?></label>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Autores</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['autores'] ?></label>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Tema</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['tema'] ?></label>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Albitraje</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['albitraje'] ?></label>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Indexaión</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['indexacion'] ?></label>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Descripción</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['descripcion'] ?></label>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Enlace Web</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><a target="_blank" href="<?php echo $publicacion['url']?>"> <?php echo $publicacion['url'] ?></a></label>                                                </div>
                                        </td>
                                </tr>
   
                         </tbody>
                </table>
    </form>
</div>
</body>
