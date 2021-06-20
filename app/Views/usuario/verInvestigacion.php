</br></br></br>

<div class="container" id="ver_Investigacion">
    <div class="card w-100">
        <div class="card-header font-weight-bold font-weight-bolder text-center">
            INVESTIGACIONES
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <?php echo "<p>" . $investigacion['nombre_proyecto'] . "</p>" ?>
            </blockquote>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <label class="font-weight-bold">Objetivos de la Publicación</label>
                <input class="form-control" type="text" value="<?php echo "" . $investigacion['objetivos'] . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">Descripción de la Investigación</label>
                <input class="form-control" type="text" value="<?php echo "" . $investigacion['descripcion'] . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">Programas que incluye la Investigación</label>
                <input class="form-control" type="text" value="<?php echo "" . $investigacion['programas'] . "" ?>" readonly>
            </li>
            <li class="list-group-item">
                <label class="font-weight-bold">Requisitos</label>
                <input class="form-control" type="text" value="<?php echo "" . $investigacion['requisitos'] . "" ?>" readonly>
            </li>

        </ul>
        <table class="table" id="tablaArchivos">
            <thead>
                <tr>
                    <th>Nombre de los Archivos</th>
                    <th>
                        <button type="button" class="btn btn-warning" id="Gestionar_archivos">
                            Gestionar archivos
                        </button>
                    </th>
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
                                <input type="text" class="form-control" name="ruta" hidden value="<?php echo $archivo['ruta'] ?>">
                                <button type="submit" class="btn btn-primary">Descargar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="card-body text-right">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarModalInvestigacion">
                Eliminar
            </button>
            <button type="button" class="btn btn-info" id="modificar_Investigacion">
                Modificar Investigacion
            </button>
        </div>
    </div>
</div>

<div class="container" id="update_Investigacion" style="display:none;">
    <div class="card w-100">
        <div class="card-header font-weight-bold font-weight-bolder text-center">
            MODIFICAR INVESTIGACIONES
        </div>
        <form id="form_ActualizarInvestigacion" method="POST" enctype="multipart/form-data">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <input class="form-control" type="text" name="id_investigacion" value="<?php echo "" . $investigacion['id_investigacion'] . "" ?>" readonly hidden>
                </li>
                <li class="list-group-item">
                    <label class="font-weight-bold">Objetivos</label>
                    <input class="form-control" type="text" name="objetivos" value="<?php echo "" . $investigacion['objetivos'] . "" ?>">
                </li>
                <li class="list-group-item">
                    <label class="font-weight-bold">Descripción</label>
                    <input class="form-control" type="text" name="descripcion" value="<?php echo "" . $investigacion['descripcion'] . "" ?>">
                </li>
                <li class="list-group-item">
                    <label class="font-weight-bold">Programas</label>
                    <input class="form-control" type="text" name="programas" value="<?php echo "" . $investigacion['programas'] . "" ?>">
                </li>
                <li class="list-group-item">
                    <label class="font-weight-bold">Requisitos</label>
                    <input class="form-control" type="text" name="requisitos" value="<?php echo "" . $investigacion['requisitos'] . "" ?>">
                </li>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label font-weight-bold">Seleccione los archivos que desea subir a la plataforma</label>
                    <input type="file" name="archivo[]" multiple accept="audio/*,video/*,image/*,.pdf,.docx" />
                </div>
            </ul>
            <div class="card-body text-right">
                <button type="button" id="botn_CancelarCambiosInvestigacion" class="btn btn-danger">Cancelar</button>
                <button type="button" id="botn_modificarInvestigacion" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>

<div class="container" id="gestor_Archivos" style="display:none;">
    <form id="nuevos_archivos" action="<?php echo base_url(); ?>/index.php/usuario/guardarArchivos" method="POST" enctype="multipart/form-data">
        <input class="form-control" type="text" name="id_investigacion" value="<?php echo "" . $investigacion['id_investigacion'] . "" ?>" hidden>
        <div class="form-group">
            <label for="formFileMultiple" class="form-label font-weight-bold">Seleccione los archivos que desea subir a la plataforma</label>
            <input type="file" id="new_archivos" name="new_archivo[]" multiple accept="audio/*,video/*,image/*,.pdf,.docx" />
            <button type="button" id="guardar_ArchivosGestor" class="btn btn-primary">Guardar</button>
        </div>
    </form>
    <table class="table" id="gestor_tablaArchivos">
        <thead>
            <tr>
                <th>Nombre de los Archivos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($archivos as $archivo) :
            ?>
                <tr ruta="<?php echo $archivo['ruta'] ?>">
                    <?php echo "<td>" . $archivo['nombre'] . "</td>" ?>
                    <td>
                        <input type="text" class="form-control" name="ruta" hidden value="<?php echo $archivo['ruta'] ?>">
                        <button type="button" class="btn btn-danger" onclick="EliminarArchivo(this,'<?php echo $archivo['ruta'] ?>')">Eliminar</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button type="button" id="salir_gestorArchivos" class="btn btn-primary">Salir del Gestor de Archivos</button>
    </br></br>
</div>

<!-- Modal -->
<div class="modal fade" id="eliminarModalInvestigacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar investigación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Seguro que desea eliminar esta investigación?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <form id="form_EliminarInvestigacion" method="POST">
                    <input type="text" class="form-control" name="id_in" hidden value="<?php echo $investigacion['id_investigacion'] ?>">
                    <button type="button" id="eliminar_Investigacion" class="btn btn-success">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>/assets/js/investigacion/verInvestigacion.js"></script>