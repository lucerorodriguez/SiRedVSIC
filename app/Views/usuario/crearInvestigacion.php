
<div class="container">
<br><br><br><br>
    <form id="form_Investigacion" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="font-weight-bold" for="inputAddress">Nombre del Proyecto</label>
            <input type="text" class="form-control" name="nombre_proyecto">
        </div>

        <div class="form-group">
            <label class="font-weight-bold" for="inputAddress2">Objetivos</label>
            <input type="text" class="form-control" name="objetivos">
        </div>

        <div class="form-group">
            <label class="font-weight-bold" for="inputAddress2">Descripción</label>
            <input type="text" class="form-control" name="descripcion">
        </div>

        <div class="form-group">
            <label class="font-weight-bold" for="exampleFormControlTextarea1">Programas</label>
            <textarea type="text" class="form-control" name="programas" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label class="font-weight-bold" for="exampleFormControlTextarea1">Requisitos</label>
            <textarea type="text" class="form-control" name="requisitos" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="formFileMultiple" class="form-label font-weight-bold">Seleccione los archivos que desea subir a la plataforma</label>
            <input type="file" id="archivo" name="archivo[]" multiple accept="audio/*,video/*,image/*,.pdf,.docx"/>
        </div>

        <div class="text-right">
        <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Usuario/listaInvestigaciones" role="button">Cancelar</a>
        <button type="button" id="botn_guardarInvestigacion" class="btn btn-primary">Crear</button>
        </div>
    </form>
    
</div>
</br>
<script src="<?php echo base_url(); ?>/assets/js/investigacion/crearInvestigacion.js"></script>