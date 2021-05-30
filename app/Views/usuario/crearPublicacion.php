</br></br></br>
<div class="container">
    <form action="<?php echo base_url(); ?>/index.php/usuario/guardarPublicacion" method="POST" class="form">
        <div class="form-group">
            <label class="font-weight-bold" for="inputAddress">Título</label>
            <input type="text" class="form-control" name="titulo">
        </div>

        <div class="form-group">
            <label class="font-weight-bold" for="inputAddress2">Tema</label>
            <input type="text" class="form-control" name="tema">
        </div>

        <div class="form-group">
            <label class="font-weight-bold" for="inputAddress2">Autor</label>
            <input type="text" class="form-control" name="autores" placeholder="Si son varios autores, separar por coma.">
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

            <div class="form-group col-md-1">
                <label class="font-weight-bold">Fecha</label>
                <input type="text" class="form-control" name="dia" placeholder="Día">
            </div>
            <div class="form-group col-md-1">
                <label class="font-weight-bold">de </label>
                <input type="text" class="form-control" name="mes" placeholder="Mes">
            </div>
            <div class="form-group col-md-1">
                <label class="font-weight-bold">Creación</label>
                <input type="text" class="form-control" name="anio" placeholder="Año">
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
</br>