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
                        <input class="form-control" id="1" type="text" value="<?php echo "" . $user['lgac'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Linea de Investigación</label>
                        <input class="form-control" id="2" type="text" value="<?php echo "" . $user['linea_investigacion'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Proyectos Vigentes</label>
                        <input class="form-control" id="3" type="text" value="<?php echo "" . $user['proyectos_vigentes'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Teléfono</label>
                        <input class="form-control" id="4" type="text" value="<?php echo "" . $user['telefono'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Área de adscripción</label>
                        <input class="form-control" id="5" type="text" value="<?php echo "" . $user['area_adscripcion'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Formación académica</label>
                        <input class="form-control" id="6" type="text" value="<?php echo "" . $user['formacion_academica'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Área de concimiento</label>
                        <input class="form-control" id="7" type="text" value="<?php echo "" . $user['area_conocimiento'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Miembro SNI-Nivel</label>
                        <input class="form-control" id="8" type="text" value="<?php echo "" . $user['sni_nivel'] . "" ?>" readonly>
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Perfil deseable</label>
                        <input class="form-control" id="9" type="text" value="<?php echo "" . $user['perfil_deseable'] . "" ?>" readonly>
                    </li>
                    
                </ul>
                <div class="card-body text-right">
                <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Inicio" role="button">Cancelar</a>

                <a class="btn btn-info" href="<?php echo base_url(); ?>/index.php/Usuario/modificar" role="button">Modifciar datos</a>
                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#fomrulario1">
                    <i class="bi bi-person-plus">Modificar datos modal</i>
                </button>
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
                <form id="formulario" action="<?php echo base_url(); ?>/index.php/usuario/AgregarFoto" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="modal-body">
                
                        <div class="form-row">
                            <h6>Seleccione el archivo que desea subir a la plataforma</h6>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="text" name="archivo_viejo" id="archivo_viejo" value="<?php echo "" . $user['foto_perfil'] . "" ?>" hidden>
                                    <input type="file" name="archivo" id="archivo" onchange="validar()"/>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="button" id="guardarFoto">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal formulario -->
    <div class="modal fade" id="fomrulario1" tabindex="-1" aria-labelledby="formulario1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TU INFORMACIÓN</h5>
                </div>
                <form id="formularioCambios" action="<?php echo base_url(); ?>/index.php/usuario/AgregarFoto" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="modal-body">
                <ul class="list-group list-group-flush">
                    
                    <li class="list-group-item">
                        <label class="font-weight-bold">LGAC</label>
                        <input class="form-control" id="form-1" name="lgac" type="text" value="<?php echo "" . $user['lgac'] . "" ?>" >
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Linea de Investigación</label>
                        <input class="form-control" id="form-2" name="linea_investigacion" type="text" value="<?php echo "" . $user['linea_investigacion'] . "" ?>" >
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Proyectos Vigentes</label>
                        <input class="form-control" id="form-3" name="proyectos_vigentes" type="text" value="<?php echo "" . $user['proyectos_vigentes'] . "" ?>" >
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Teléfono</label>
                        <input class="form-control" id="form-4" name="telefono" type="text" value="<?php echo "" . $user['telefono'] . "" ?>" >
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Área de adscripción</label>
                        <input class="form-control" id="form-5" name="area_adscripcion" type="text" value="<?php echo "" . $user['area_adscripcion'] . "" ?>" >
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Formación académica</label>
                        <input class="form-control" id="form-6" name="formacion_academica" type="text" value="<?php echo "" . $user['formacion_academica'] . "" ?>" >
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Área de concimiento</label>
                        <input class="form-control" id="form-7" name="area_conocimiento" type="text" value="<?php echo "" . $user['area_conocimiento'] . "" ?>" >
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Miembro SNI-Nivel</label>
                        <input class="form-control" id="form-8" name="sni_nivel" type="text" value="<?php echo "" . $user['sni_nivel'] . "" ?>" >
                    </li>
                    <li class="list-group-item">
                        <label class="font-weight-bold">Perfil deseable</label>
                        <input class="form-control" id="form-9" name="perfil_deseable" type="text" value="<?php echo "" . $user['perfil_deseable'] . "" ?>" >
                    </li>
                </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelarCambios">Cancelar</button>
                        <button class="btn btn-primary" type="button" id="guardarCambios">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>/assets/js/usuario/perfil.js"></script>