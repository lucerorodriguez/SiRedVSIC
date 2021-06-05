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
                            <label  class="font-weight-bold">LGAC</label>
                            <input class="form-control" type="text" name = "lgac" value="<?php echo " " . $user['lgac'] . "" ?>">
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
                        <li class="list-group-item">
                            <label  class="font-weight-bold">Área de adscipción</label>
                            <input class="form-control" type="text" name = "area_adscripcion" value="<?php echo " " . $user['area_adscripcion'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                            <label  class="font-weight-bold">Formación Académica</label>
                            <input class="form-control" type="text" name = "formacion_academica" value="<?php echo " " . $user['formacion_academica'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                            <label  class="font-weight-bold">Área de conocimiento</label>
                            <input class="form-control" type="text" name = "area_conocimiento" value="<?php echo " " . $user['area_conocimiento'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                            <label  class="font-weight-bold">Miembro SNI Nivel</label>
                            <input class="form-control" type="text" name = "sni_nivel" value="<?php echo " " . $user['sni_nivel'] . "" ?>">
                        </li>


                        <li class="list-group-item">
                            <label  class="font-weight-bold">Perfil Deseable</label>
                            <input class="form-control" type="text" name = "perfil_deseable" value="<?php echo " " . $user['perfil_deseable'] . "" ?>">
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