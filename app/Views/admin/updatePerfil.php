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
                <form action="<?php echo base_url(); ?>/index.php/admin/update" method="POST">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label class="font-weight-bold">Nombre</label>
                            <input class="form-control" type="text" name = "nombre" value="<?php echo " " . $user['nombre'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                            <label class="font-weight-bold">Institución</label>
                            <input class="form-control" type="text" name = "institucion" value="<?php echo " " . $user['institucion'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                            <label class="font-weight-bold">Correo</label>
                            <input class="form-control" type="email" name = "correo" value="<?php echo " " . $user['correo'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                            <label class="font-weight-bold">Teléfono</label>
                            <input class="form-control" type="text" name = "telefono" value="<?php echo " " . $user['telefono'] . "" ?>">
                        </li>

                    </ul>
                    <div class="card-body">
                        <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/admin/perfil" role="button">Cancelar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>

                </form>

            </div>
    </div>
<?php endforeach; ?>
</div>
</div>