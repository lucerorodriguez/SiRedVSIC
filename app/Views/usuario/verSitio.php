</br></br></br>

<div id="infoSitio" class="container">

    <div class="card w-100">
        <div class="card-header font-weight-bold font-weight-bolder text-center">
            SITIO
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <?php echo "<p>" . $sitio['nombre_sitio'] . "</p>" ?>
            </blockquote>
            <ul class="list-group list-group-flush" style="list-style: none;">
                <li>
                    <label class="font-weight-bold">Autores</label>
                    <input class="form-control" type="text" value="<?php echo "" . $sitio['categoria'] . "" ?>" readonly>
                </li>
                <li >
                    <label class="font-weight-bold">Tema</label>
                    <input class="form-control" type="text" value="<?php echo "" . $sitio['descripcion'] . "" ?>" readonly>
                </li>
                <li >
                    <label class="font-weight-bold">Albitraje</label>
                    <input class="form-control" type="text" value="<?php echo "" . $sitio['url'] . "" ?>" readonly>
                </li>

             </ul>
        </div>
        <div class="card-body text-right">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarModal">
                Eliminar
            </button>
            <button type="button" class="btn btn-info" id="boton_UpdateDatos">
                Modifciar datos
            </button>
        </div>
    </div> 
</div>

<div class="container" id="updateSitio" style="display:none;">
<div class="card w-100">
                <div class="card-header font-weight-bold font-weight-bolder text-center">
                       MODIFICAR SITIO DE INTERÉS
                </div>
                <form id="form_cambiarDatos" method="POST">
                <ul class="list-group list-group-flush">
                                <input class="form-control" type="text" name="id_sitio" value="<?php echo "" . $sitio['id_sitio']."" ?>" readonly hidden>
                        <li class="list-group-item">
                                <label class="font-weight-bold">Nomre del Sitio de Interés</label>
                                <input class="form-control" type="text" name="nombre_sitio" value="<?php echo "" . $sitio['nombre_sitio'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                                <label class="font-weight-bold">Categoría</label>
                                <input class="form-control" type="text" name="categoria" value="<?php echo "" . $sitio['categoria'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                                <label class="font-weight-bold">Descripción</label>
                                <input class="form-control" type="text" name="descripcion" value="<?php echo "" . $sitio['descripcion'] . "" ?>">
                        </li>
                        <li class="list-group-item">
                                <label class="font-weight-bold">URL</label>
                                <input class="form-control" type="text" name="url_name" value="<?php echo "" . $sitio['url'] . "" ?>">
                        </li>

                </ul>
                <div class="card-body text-right">
                <button type="button" id="cancelar_UpdateDatos" class="btn btn-danger">Cancelar</button>
                <button type="button" id="boton_guardarCambios"  class="btn btn-success">Guardar</button>
                </div>
                </form>
        </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar publicacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Seguro que desea eliminar este Sitio?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <input type="text" id="id_sitioEliminar" name="id_medinateName" hidden value="<?php echo $sitio['id_sitio']?>">
                    <button id="eliminarsitio" type="button" class="btn btn-success">Aceptar</button>
                </div>
            </div>
        </div>
    </div>


<script src="<?php echo base_url(); ?>/assets/js/sitio/verSitio.js"></script>