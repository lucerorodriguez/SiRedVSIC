</br></br>
<div class="container">
    </br></br>
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-miembros" role="tab" aria-controls="home">Miembros</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-pendientes" role="tab" aria-controls="profile">Perfiles pendientes</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-administradores" role="tab" aria-controls="messages">Administradores</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-miembros" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="card w-75">
                        <div class="card-header">
                            Miembros Activos
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($usuarios as $usuario) :
                                        if ($usuario['rol'] == '2' && $usuario['estado'] == 'miembro') {

                                    ?>
                                            <tr>
                                                <th scope="row"> <?php echo $usuario['id_usuario'] ?></th>

                                                <?php echo "<td>" . $usuario['nombre'] . "</td>" ?>
                                                <?php echo "<td>" . $usuario['correo'] . "</td>" ?>
                                                <td><a class="btn btn-primary" href="http://localhost/cursoCodeIgniter-Udemy/index.php/admin/perfilUsuario/<?php echo $usuario['id_usuario'] ?>" role="button">Abrir</a></td>
                                            </tr>
                                    <?php
                                        }
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-pendientes" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="card w-75">
                        <div class="card-header">
                            Perfiles Pendientes
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($usuarios as $usuario) :
                                        if ($usuario['rol'] == '2' && $usuario['estado'] == 'pendiente') {

                                    ?>
                                            <tr>
                                                <th scope="row"> <?php echo $usuario['id_usuario'] ?></th>

                                                <?php echo "<td>" . $usuario['nombre'] . "</td>" ?>
                                                <?php echo "<td>" . $usuario['correo'] . "</td>" ?>
                                                <td class="text-danger">Pendiente</td>
                                                <td><a class="btn btn-primary" href="http://localhost/cursoCodeIgniter-Udemy/index.php/admin/validarUsuario/<?php echo $usuario['id_usuario'] ?>" role="button">revisar</a></td>
                                            </tr>
                                    <?php
                                        }
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-administradores" role="tabpanel" aria-labelledby="list-messages-list">
                    <div class="card w-75">
                        <div class="card-header">
                            Miembros Administradores
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($usuarios as $usuario) :
                                        if ($usuario['rol'] == '1' && $usuario['estado'] == 'miembro') {
                                            $session = \Config\Services::session();
                                            $id = $session->get('id_usuario');
                                            if ($usuario['id_usuario'] == $id) {
                                    ?>
                                                <tr class="p-3 mb-2 bg-primary text-white">
                                                    <th scope="row"> <?php echo $usuario['id_usuario'] ?></th>

                                                    <?php echo "<td>" . $usuario['nombre'] . "</td>" ?>
                                                    <?php echo "<td>" . $usuario['correo'] . "</td>" ?>
                                                </tr>
                                            <?php
                                            }  if ($usuario['id_usuario'] !== $id) { ?>
                                            <tr>
                                                <th scope="row"> <?php echo $usuario['id_usuario'] ?></th>

                                                <?php echo "<td>" . $usuario['nombre'] . "</td>" ?>
                                                <?php echo "<td>" . $usuario['correo'] . "</td>" ?>
                                                <td><a class="btn btn-primary" href="http://localhost/cursoCodeIgniter-Udemy/index.php/Usuario/verPublicacion/<?php echo $usuario['id_usuario'] ?>" role="button">Abrir</a></td>
                                            </tr>
                                    <?php
                                            }
                                        }
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</br></br>