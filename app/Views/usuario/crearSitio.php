<div class="container">
<br><br><br><br>
    <form id="form_crearSitio" method="POST" class="form" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <label class="font-weight-bold" for="inputAddress">Nombre del Sitio</label>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre_sitio"> 
            </div>
            <div class="col">
                <label class="font-weight-bold" for="inputAddress2">Categoría</label>
                <input type="text" class="form-control" placeholder="Seleccione la categoría" name="categoria">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col">
                <label class="font-weight-bold" for="inputAddress">Breve Descripción</label>
                <input type="text" class="form-control" placeholder="Descripción" name="descripcion"> 
            </div>
            <div class="col">
                <label class="font-weight-bold" for="inputAddress2">Enlace o URL</label>
                <input type="text" class="form-control" placeholder="www.algo.com" name="url">
            </div>
        </div>
        <br>
        <div class="text-right">
        <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Usuario/listaSitios" role="button">Cancelar</a>
        <button id="button_crearSitio" type="button" class="btn btn-primary">Crear</button>
        </div>
    </form>
</div>
</br>
<script src="<?php echo base_url(); ?>/assets/js/sitio/crearSitio.js"></script>