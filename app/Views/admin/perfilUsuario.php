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
            <br><br>
                <div class="card-header">
                    TU INFORMACIÓN
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <?php echo "<p>" . $user['nombre'] . "</p>" ?>
                        <footer class="blockquote-footer"><?php echo " " . $user['institucion'] . " " ?></footer>
                    </blockquote>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <label class="font-weight-bold">Correo</label>
                        <input class="form-control" type="text" value="<?php echo " " . $user['correo'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Grado de investigación</label>
                        <input class="form-control" type="text" value="<?php echo " " . $user['grado_investigacion'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Línea de investigación</label>
                        <input class="form-control" type="text" value="<?php echo " " . $user['linea_investigacion'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Proyectos vigentes</label>
                        <input class="form-control" type="text" value="<?php echo " " . $user['proyectos_vigentes'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Teléfono</label>
                        <input class="form-control" type="text" value="<?php echo " " . $user['telefono'] . "" ?>" readonly>
                    </li>
                    
                </ul>
                <div class="card-body">
                <a class="btn btn-info" href="<?php echo base_url(); ?>/index.php/Usuario/modificar" role="button">Modifciar datos</a>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>