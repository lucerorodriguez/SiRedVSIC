</br>

<div class="container">
    <div class="row">
        <?php
        foreach ($data_user as $user) :
        ?>
            <div class="card w-25" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo base_url(); ?>/public/assets/perfil.jpg" alt="Card image cap">

            </div>
            <div class="card w-75">
                <div class="card-header font-weight-bold font-weight-bolder text-center">
                    TU INFORMACIÓN
                </div>
                <form action="<?php echo base_url(); ?>/index.php/Usuario/update" method="POST">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label  class="font-weight-bold">Nombre</label>
                            <input class="form-control" type="text" name = "nombre" value="<?php echo " " . $user['nombre'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                            <label  class="font-weight-bold">Grado de Investigación</label>
                            <input class="form-control" type="text" name = "grado_investigacion" value="<?php echo " " . $user['grado_investigacion'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                            <label  class="font-weight-bold">Línea de Investigación</label>
                            <input class="form-control" type="text" name = "linea_investigacion" value="<?php echo " " . $user['linea_investigacion'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                            <label  class="font-weight-bold">Proyectos Vigentes</label>
                            <input class="form-control" type="text" name = "proyectos_vigentes" value="<?php echo " " . $user['proyectos_vigentes'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                            <label  class="font-weight-bold">Teléfono</label>
                            <input class="form-control" type="text" name = "telefono" value="<?php echo " " . $user['telefono'] . "" ?>">
                        </li>

                    </ul>
                    <div class="card-body text-right">
                    <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Usuario/verPerfil" role="button">Cancelar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                        
                </form>

            </div>
    </div>
<?php endforeach; ?>
</div>
</div>