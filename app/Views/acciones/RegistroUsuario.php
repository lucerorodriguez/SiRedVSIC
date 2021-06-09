<body>
    </br></br></br>
    <div class="container">
        <form action="<?php echo base_url(); ?>/index.php/Usuario/guardar" method="POST" class="needs-validation" novalidate>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01" class="font-weight-bold">Nombre completo</label>
                    <input type="text" class="form-control" name="nombre" id="validationCustom01" required>
                    <div class="invalid-feedback">
                        Por favor ingresa tu nombre junto con tus apellidos.
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="font-weight-bold">Institución</label>
                    <input type="text" class="form-control" name="institucion" required>
                    <small id="help" class="form-text text-muted">Nombre de la intitucion a la que perteneces, trabajas o egresaste.</small>
                    <div class="invalid-feedback">
                        Por favor ingresa el nombre de tu institucion.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label class="font-weight-bold">Correo Electrónico</label>
                    <input type="email" class="form-control" name="correo" required>
                    <div class="invalid-feedback">
                        Por favor ingresa un correo válido.
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label class="font-weight-bold">Número de Teléfono</label>
                    <input type="text" class="form-control" name="telefono" required>
                    <div class="invalid-feedback">
                        Por favor ingresa un número de teléfono válido
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="font-weight-bold">LGAC</label>
                    <input type="text" class="form-control" name="lgac" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="font-weight-bold">Línea de Investigación</label>
                    <input type="text" class="form-control" name="linea_investigacion" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label class="font-weight-bold">Área de adscripción</label>
                    <input type="text" class="form-control" name="area_adscripcion" required>
                    <div class="invalid-feedback">
                        Por favor ingresa el área de adscipción
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="font-weight-bold">Formación acádemica</label>
                    <input type="text" class="form-control" name="formacion_academica" required>
                    <div class="invalid-feedback">
                        Por favor ingresa la formación académica
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="font-weight-bold">Área de conocimiento</label>
                    <input type="text" class="form-control" name="area_conocimiento" required>
                </div>
               
            </div>
            <div class="form-row">
            <br><br>
                <div class="form-group col-md-6">
                    <label for="validationCustom01" class="font-weight-bold">Miembro SNI-Nivel</label>
                    <select name="sni_nivel" class="custom-select" aria-label="Default select example">
                        <option selected requiered>Selecciona el nivel</option>
                        <option value="Candidato a investigador nacioanl">Candidato a Investigador Nacional</option>
                        <option value="Investigador nacional nivel I">Investigador Nacional nivel I</option>
                        <option value="Investigador nacional nivel I">Investigador Nacional Nivel II</option>
                        <option value="Investigador nacional nivel III">Investigador Nacional Nivel III</option>
                        <option value="Investigador nacional emérito">Investigador Nacional Emérito</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor ingresa el nivel SNI
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="font-weight-bold">Perfil deseable</label>
                    <input type="text" class="form-control" name="perfil_deseable" required>
                    <div class="invalid-feedback">
                        Por favor ingresa el perfil deseable
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Proyectos Vigentes</label>
                <textarea class="form-control" name="proyectos_vigentes" rows="2" required></textarea>
                <small id="help" class="form-text text-muted">Escribe el nombre del proyecto y la intitucion, en caso de que ser varios proyectos separar con un punto y espacio. </small>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Debes aceptar que al realizar la solicitud de registro en la plataforma tu información será revizada por los moderadores de la plataforma para comprobar los datos, después del proceso de aunteticación se te enviará tu contraseña de acceso al correo que has proporcionado.
                    </label>
                    <div class="invalid-feedback">
                        Debes aceptar la condición de registro.
                    </div>
                </div>
            </div>
            <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Inicio" role="button">Cancelar</a>
            <button class="btn btn-primary" type="submit">Enviar solicitud de registro</button>
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