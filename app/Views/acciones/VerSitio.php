
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
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Id del sitio</label>
                                            </th>
                                             <td>
                                                    <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $sitio['id_sitio'] ?></label>
                                                    </div>
                                            </td>
                                    </tr>
                                
                                    <tr>
                                            <th scope="row">
                                                    <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                                            </th>
                                             <td>
                                                    <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $sitio['nombre_sitio'] ?></label>
                                                    </div>
                                            </td>
                                    </tr>
                                    <tr>
                                            <th scope="row">
                                                    <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Categoria</label>
                                            </th>
                                             <td>
                                                    <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $sitio['categoria'] ?></label>
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
                                                    <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $sitio['descripcion'] ?></label>
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
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><a target="_blank" href=" <?php echo $sitio['url']?>"> <?php echo $sitio['url'] ?></a></label>                                                </div>
                                        </td>
                                </tr>
       
                             </tbody>
                    </table>
            
  
            
        </form>
    </div>
    </body>
    