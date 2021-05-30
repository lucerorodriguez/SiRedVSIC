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
                <div class="card-header">
                    Tu informacion
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <?php echo "<p>" . $user['nombre'] . "</p>" ?>
                        <footer class="blockquote-footer"><?php echo " " . $user['institucion'] . " " ?></footer>
                    </blockquote>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <label>Correo</label>
                        <input class="form-control" type="text" value="<?php echo " " . $user['correo'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label>Grado de investigacion</label>
                        <input class="form-control" type="text" value="<?php echo " " . $user['grado_investigacion'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label>Linea de investigacion</label>
                        <input class="form-control" type="text" value="<?php echo " " . $user['linea_investigacion'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label>Proyectos vigentes</label>
                        <input class="form-control" type="text" value="<?php echo " " . $user['proyectos_vigentes'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label>Telefono</label>
                        <input class="form-control" type="text" value="<?php echo " " . $user['telefono'] . "" ?>" readonly>
                    </li>

                </ul>
                <div class="card-body">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#validarUsuario" data-whatever="@mdo">Validar usuario</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#rechazarUsuario" data-whatever="@mdo">Rechazar solicitud</button>
                </div>
            </div>
            <!-- Esta parte es del modal-->
            <div class="modal fade" id="validarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Validar usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url(); ?>/index.php/admin/validar " method="POST" class="form">
                                <div class="modal-body">
                                    <p>Para validar el usuario, necesitas generar una contraseña provicional y aceptar el cambio de estado del usuario.</p></br>
                                    <p>al realizar la validacion debes enviar un correo al usuario registrado con su contraseña generada.</p>
                                    <div class="form-group">
                                        <label>id del usuario</label>
                                        <input class="form-control" type="text" name="id_usuario" value="<?php echo " " . $user['id_usuario'] . "" ?>" readonly>

                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Contraseña</label>
                                            <input type="text" class="form-control" name="contrasena" placeholder="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input is-invalid" type="checkbox" name="estado" value="miembro" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                                <label class="form-check-label" for="invalidCheck3">
                                                    Cambiar el estado del usuario de pendiente a miembro
                                                </label>
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    Necesitas aceptar el cambio
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto my-1">
                                            <button class="btn btn-primary">Aceptar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Esta parte es del modal-->
            <div class="modal fade" id="rechazarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Reachazar solicitud</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url(); ?>/index.php/admin/denegar " method="POST" class="form">
                                <div class="modal-body">
                                    <p>Previo a rechazar la solicitud debes enviar un correo al solicitante con la razon de proque fue negada su solicitud de registro</p>
                                    <label>id_usuario</label>
                                    <input class="form-control" type="text" name="id_usuario" value="<?php echo " " . $user['id_usuario'] . "" ?>" readonly>
                                    <label>Correo</label>
                                    <input class="form-control" type="text" name="correo" value="<?php echo " " . $user['correo'] . "" ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input is-invalid" type="checkbox" name="estado" value="miembro" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                        <label class="form-check-label" for="invalidCheck3">
                                            Ya tome los datos de correo del usuario y envie el correo con los motivos de la negacion a su peticion
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <button class="btn btn-danger">eliminar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</br>