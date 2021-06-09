<body>
    </br></br></br>
    <div class="container">
        <form action="<?php echo base_url(); ?>/index.php/usuario/guardarTesis" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="form-row">
            <div class="form-group col-md-4">
                    <label class="font-weight-bold">Nombre asesor</label>
                    <input type="text" class="form-control" name="asesor" required>
                    <small id="help" class="form-text text-muted">Favor de ingresar el nombre completo</small>
                    <div class="invalid-feedback">
                        Por favor ingresa el nombre completo.
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="font-weight-bold">Nombre del tesista</label>
                    <input type="text" class="form-control" name="tesista" required>
                    <small id="help" class="form-text text-muted">Favor de ingresar el nombre completo</small>
                    <div class="invalid-feedback">
                        Por favor ingresa el nombre completo.
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="font-weight-bold">Tema</label>
                    <input type="text" class="form-control" name="tema_tesis" required>
                    <small id="help" class="form-text text-muted">Favor de ingresar el tema de la tesis</small>
                    <div class="invalid-feedback">
                        Por favor ingresa el tema de la tesis
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Área de conocimiento</label>
                <input class="form-control" name="area_conocimiento" required>
                <small id="help" class="form-text text-muted">Escribe el área de conocimiento a la que pertenece </small>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Descripción</label>
                <textarea class="form-control" name="descripcion" required></textarea>
                <small id="help" class="form-text text-muted">Escribe una breve descripción del tema de la tesis</small>
            </div>
            
            <div class="form-group">
                <label class="font-weight-bold">Comentarios</label>
                <textarea class="form-control" name="comentarios" rows="2" required></textarea>
                <small id="help" class="form-text text-muted">Escribe algunos comentarios adicionales que quieras agregar</small>
            </div>

            <div class="mb-3">
                <label for="formFileMultiple" class="form-label font-weight-bold">Seleccione el archivo que desea subir a la plataforma</label>
                <input type="file" name="archivo"/>
            </div>
            
            <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Inicio" role="button">Cancelar</a>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </div>

    </br>
</body>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>