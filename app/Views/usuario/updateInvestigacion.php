</br>

<div class="container">

        <div class="card w-100">
                <div class="card-header font-weight-bold font-weight-bolder text-center">
                       MODIFICAR INVESTIGACIONES
                </div>
                <form action="<?php echo base_url(); ?>/index.php/Usuario/updateInvestigacion" method="POST" enctype="multipart/form-data">
                <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                                <input class="form-control" type="text" name="id_investigacion" value="<?php echo "" . $investigacion['id_investigacion']."" ?>" readonly hidden>
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
                            <input type="file" name="archivo[]" multiple/>
                        </div>
                </ul>
                <div class="card-body text-right">
                <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Usuario/listaInvestigaciones" role="button">Cancelar</a>
                <button type="submit" class="btn btn-success" >Guardar</button>
                </div>
                </form>
        </div>
</div>
 <script src="<?php echo base_url(); ?>/assets/js/usuario/updateInvestigacion.js"></script>