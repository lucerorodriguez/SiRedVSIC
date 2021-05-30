</br>

<div class="container">

        <div class="card w-100">
                <div class="card-header font-weight-bold font-weight-bolder text-center">
                       MODIFICAR SITIO DE INTERÉS
                </div>
                <form action="<?php echo base_url(); ?>/index.php/Usuario/updateSitio" method="POST">
                <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                                <label class="font-weight-bold">Id del sitio</label>
                                <input class="form-control" type="text" name="id_sitio" value="<?php echo "" . $sitio['id_sitio']."" ?>" readonly>
                        </li>
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
                                <input class="form-control" type="text" name="url" value="<?php echo "" . $sitio['url'] . "" ?>">
                        </li>

                </ul>
                <div class="card-body text-right">
                <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Usuario/listaSitios" role="button">Cancelar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
                </div>
                </form>
        </div>
</div>