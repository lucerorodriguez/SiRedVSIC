</br></br></br>
<div class="container">
    <form action="<?php echo base_url(); ?>/index.php/usuario/guardarPublicacion" method="POST" class="form" id="formulario">
        <div class="form-group">
            <label class="font-weight-bold" for="inputAddress">Título</label>
            <input type="text" class="form-control" name="titulo">
        </div>

        <div class="form-group">
            <label class="font-weight-bold" for="inputAddress2">Tema</label>
            <input type="text" class="form-control" name="tema">
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label class="font-weight-bold">Nombre de autor</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Introducir el nombre del autor.">
            </div>

            <div class="form-group col-md-2">
                </br>
                <button type="button" class="btn btn-primary" id="add_autor">Agregar Autor</button>
            </div>
            <div class="form-group col-md-5">
                <label class="font-weight-bold">Autores</label>
                <ul id="list-autores" style="list-style: none;"></ul>
            </div>
            <input type="text" class="form-control" name="autores" id="autores" value="" hidden>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-5">
                <label class="font-weight-bold">Albitraje</label>
                <input type="text" class="form-control" name="albitraje">
            </div>

            <div class="form-group col-md-4">
                <label class="font-weight-bold">Indexación</label>
                <input type="text" class="form-control" name="indexacion">
            </div>

            <div class="form-group col-md-3">
                <label class="font-weight-bold">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="fecha">
            </div>
        </div>

        <div class="form-group">
            <label class="font-weight-bold" for="exampleFormControlTextarea1">Descripción</label>
            <textarea type="text" class="form-control" name="descripcion" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label class="font-weight-bold" for="inputAddress2">URL</label>
            <input type="text" class="form-control" name="url">
        </div>

        <div class="text-right">
        <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Usuario/listaPublicaciones" role="button">Cancelar</a>
        <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </form>
</div>
<script src="<?php echo base_url(); ?>/assets/js/usuario/crearPublicacion.js"></script>
</br>