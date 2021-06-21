</br></br></br>

<div class="container" id="ver_perfil">
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
            </div>
            <div class="card w-75">
                <br><br>
                <div class="card-header font-weight-bold font-weight-bolder text-center">
                    TU INFORMACIÓN
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <?php echo "<p>" . $user['nombre'] . "</p>" ?>
                        <footer class="blockquote-footer"><?php echo  $user['institucion']  ?></footer>
                    </blockquote>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <label class="font-weight-bold">Correo</label>
                        <input class="form-control" type="text" value="<?php echo  $user['correo']  ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">LGAC</label>
                        <input class="form-control" id="1" type="text" value="<?php echo  $user['lgac']  ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Linea de Investigación</label>
                        <input class="form-control" id="2" type="text" value="<?php echo  $user['linea_investigacion']  ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Proyectos Vigentes</label>
                        <input class="form-control" id="3" type="text" value="<?php echo  $user['proyectos_vigentes']  ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Teléfono</label>
                        <input class="form-control" id="4" type="text" value="<?php echo  $user['telefono']  ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Área de adscripción</label>
                        <input class="form-control" id="5" type="text" value="<?php echo  $user['area_adscripcion']  ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Formación académica</label>
                        <input class="form-control" id="6" type="text" value="<?php echo  $user['formacion_academica']  ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Área de concimiento</label>
                        <input class="form-control" id="7" type="text" value="<?php echo  $user['area_conocimiento']  ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Miembro SNI-Nivel</label>
                        <input class="form-control" id="8" type="text" value="<?php echo  $user['sni_nivel']  ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Perfil deseable</label>
                        <input class="form-control" id="9" type="text" value="<?php echo  $user['perfil_deseable']  ?>" readonly>
                    </li>

                </ul>
                <div class="card-body text-right">
                    <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Inicio" role="button">Salir</a>
                    <button type="button" class="btn btn-info" id="modificarPerfil">Modificar Informacion</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="container" id="update_perfil" style="display:none;">
    <div class="row">
        <?php
        foreach ($data_user as $user) :
        ?>
            <div class="card w-25">
               
            </div>
            <div class="card w-75">
                <div class="card-header font-weight-bold font-weight-bolder text-center">
                    TU INFORMACIÓN
                </div>
                <form id="formularioCambios" method="POST">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label class="font-weight-bold">Nombre</label>
                            <input class="form-control" type="text" name="nombre" value="<?php echo $user['nombre'] ?>">
                        </li>
                        <li class="list-group-item">
                            <label class="font-weight-bold">LGAC</label>
                            <input class="form-control" type="text" name="lgac" value="<?php echo  $user['lgac']  ?>">
                        </li>
                        <li class="list-group-item">
                            <label class="font-weight-bold">Línea de Investigación</label>
                            <input class="form-control" type="text" name="linea_investigacion" value="<?php echo  $user['linea_investigacion']  ?>">
                        </li>
                        <li class="list-group-item">
                            <label class="font-weight-bold">Proyectos Vigentes</label>
                            <input class="form-control" type="text" name="proyectos_vigentes" value="<?php echo  $user['proyectos_vigentes']  ?>">
                        </li>
                        <li class="list-group-item">
                            <label class="font-weight-bold">Teléfono</label>
                            <input class="form-control" type="text" name="telefono" value="<?php echo  $user['telefono']  ?>">
                        </li>
                        <li class="list-group-item">
                            <label class="font-weight-bold">Área de adscipción</label>
                            <input class="form-control" type="text" name="area_adscripcion" value="<?php echo  $user['area_adscripcion']  ?>">
                        </li>
                        <li class="list-group-item">
                            <label class="font-weight-bold">Formación Académica</label>
                            <input class="form-control" type="text" name="formacion_academica" value="<?php echo  $user['formacion_academica']  ?>">
                        </li>
                        <li class="list-group-item">
                            <label class="font-weight-bold">Área de conocimiento</label>
                            <input class="form-control" type="text" name="area_conocimiento" value="<?php echo  $user['area_conocimiento']  ?>">
                        </li>
                        <li class="list-group-item">
                            <label class="font-weight-bold">Miembro SNI Nivel</label>
                            <input type="text" hidden name="initialVal_sni_nivel" id="initialVal_sni_nivel" value="<?php echo  $user['sni_nivel']  ?>">
                            <select name="sni_nivel" id="sni_nivel" class="custom-select" aria-label="Default select example">

                            </select>
                        </li>


                        <li class="list-group-item">
                            <label class="font-weight-bold">Perfil Deseable</label>
                            <input class="form-control" type="text" name="perfil_deseable" value="<?php echo  $user['perfil_deseable']  ?>">
                        </li>

                    </ul>
                    <div class="card-body text-right">
                        <button type="button" class="btn btn-danger" id="cancelar_updatePerfil">Cancelar</button>
                        <button type="button" class="btn btn-success" id="guardar_cambiosPerfil">Guardar</button>
                    </div>
                </form>

            </div>
    </div>
<?php endforeach; ?>

</div>
<!-- modal formulario -->
<div class="modal fade" id="agregarfoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nueva foto de perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrar_modalX">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formulario" action="<?php echo base_url(); ?>/index.php/usuario/AgregarFoto" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="modal-body">

                    <div class="form-row">
                        <h6>Seleccione el archivo que desea subir a la plataforma</h6>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="text" name="archivo_viejo" id="archivo_viejo" value="<?php echo  $user['foto_perfil']  ?>" hidden>
                                <input type="file" name="archivo" id="archivo" accept="image/*" />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="cerrar_modalCancelar">Cancelar</button>
                    <button class="btn btn-primary" type="button" id="guardarFoto">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="<?php echo base_url(); ?>/assets/js/usuario/perfil.js"></script>