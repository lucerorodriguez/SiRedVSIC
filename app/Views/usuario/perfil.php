</br></br></br>

<div class="container">
    <div class="row">
        <?php
        foreach ($data_user as $user) :
        ?>
            <div class="card" style="width: 20% !important;;">
                <img class="card-img-top" src="<?php echo base_url(); ?><?php echo $user['foto_perfil'] ?>" alt="Card image cap">
                </br>
                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#agregarfoto">
                    <i class="bi bi-person-plus">Cambiar foto</i>
                </button>
                
                <!--<form action="/action_page.php">
                    <div class="input-group">
                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    <br>
                    <button class="btn btn-outline-secondary" type="button" id="iSnputGroupFileAddon04">Guardar</button>
                     </div>
                </form>-->
            </div>
            <div class="card w-75">
            <br><br>
                <div class="card-header font-weight-bold font-weight-bolder text-center">
                    TU INFORMACIÓN
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <?php echo "<p>" . $user['nombre'] . "</p>" ?>
                        <footer class="blockquote-footer"><?php echo "" . $user['institucion'] . "" ?></footer>
                    </blockquote>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <label class="font-weight-bold">Correo</label>
                        <input class="form-control" type="text" value="<?php echo "" . $user['correo'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">LGAC</label>
                        <input class="form-control" type="text" value="<?php echo "" . $user['lgac'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Linea de Investigación</label>
                        <input class="form-control" type="text" value="<?php echo "" . $user['linea_investigacion'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Proyectos Vigentes</label>
                        <input class="form-control" type="text" value="<?php echo "" . $user['proyectos_vigentes'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Teléfono</label>
                        <input class="form-control" type="text" value="<?php echo "" . $user['telefono'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Área de adscripción</label>
                        <input class="form-control" type="text" value="<?php echo "" . $user['area_adscripcion'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Formación académica</label>
                        <input class="form-control" type="text" value="<?php echo "" . $user['formacion_academica'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Área de concimiento</label>
                        <input class="form-control" type="text" value="<?php echo "" . $user['area_conocimiento'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Miembro SNI-Nivel</label>
                        <input class="form-control" type="text" value="<?php echo "" . $user['sni_nivel'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Perfil deseable</label>
                        <input class="form-control" type="text" value="<?php echo "" . $user['perfil_deseable'] . "" ?>" readonly>
                    </li>
                    
                </ul>
                <div class="card-body text-right">
                <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Inicio" role="button">Cancelar</a>

                <a class="btn btn-info" href="<?php echo base_url(); ?>/index.php/Usuario/modificar" role="button">Modifciar datos</a>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="modal fade" id="agregarfoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nueva foto de perfil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url(); ?>/index.php/usuario/AgregarFoto" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="modal-body">
                
                        <div class="form-row">
                            <h6>Seleccione el archivo que desea subir a la plataforma</h6>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Subir</span>
                                </div>
                                <div class="custom-file">
                                    <input type="text" name="archivo_viejo" value="<?php echo "" . $user['foto_perfil'] . "" ?>" hidden>
                                    <input type="file" name="archivo" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" >Selecciona una fotografia de formato .jpg</label>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>