
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
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Id Investigación</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $investigacion['id_investigacion'] ?></label>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Nombre del Proyecto</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $investigacion['nombre_proyecto'] ?></label>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Objetivos</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $investigacion['objetivos'] ?></label>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">descripción</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $investigacion['descripcion'] ?></label>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Programas</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $investigacion['programas'] ?></label>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Requisitos</label>
                                        </th>
                                         <td>
                                                <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $investigacion['requisitos'] ?></label>
                                                </div>
                                        </td>
                                </tr>
                               
   
                         </tbody>
                </table>
                
    <!--
            <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Id publicacion</label>
                    <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $investigacion['id_investigacion'] ?></label>
            </div>
            <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre del Proyecto</label>
                    <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $investigacion['nombre_proyecto'] ?></label>
            </div>
            <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Objetivo</label>
                    <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $investigacion['objetivos']?></label>
            </div>
            <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Descripción</label>
                    <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $investigacion['descripcion'] ?></label>
            </div>
            <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Programas</label>
                    <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $investigacion['programas'] ?></label>
            </div>
            <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Requisitos</label>
                    <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $investigacion['requisitos'] ?></label>
            </div>
           
            -->
            
        </form>
        <table class="table" id="tablaArchivos">
    <thead>
      <tr>
        <th >Nombre de los Archivos</th>
         <th >Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($archivos as $archivo) :
      ?>
        <tr>
          <?php echo "<td>" . $archivo['nombre'] . "</td>" ?>
          <td>
            <form action="<?php echo base_url(); ?>/index.php/usuario/downloadArchivo" method="POST">
                <input type="text" class="form-control" name="id_in" hidden value="<?php echo "" . $id_investigacion."" ?>">
                <input type="text" class="form-control" name="ruta" hidden value="<?php echo $archivo['ruta'] ?>">
                <button type="submit" class="btn btn-primary">Descargar</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
</table>
    </div>
    </body>