
<body>
    
</br></br></br>
<div class="container">
    <form>

        <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Id publicacion</label>
                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['id_publicacion'] ?></label>
        </div>
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Titulo</label>
                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['titulo'] ?></label>
        </div>
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Fecha de creacion</label>
                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo "".$publicacion['dia']."/".$publicacion['mes']."/".$publicacion['anio']."" ?></label>
        </div>
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Autores</label>
                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['autores'] ?></label>
        </div>
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tema</label>
                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['tema'] ?></label>
        </div>
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Albitraje</label>
                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['albitraje'] ?></label>
        </div>
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">indexacion</label>
                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['indexacion'] ?></label>
        </div>
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">descricion</label>
                <label for="staticEmail" class="col-sm-2 col-form-label"> <?php echo $publicacion['descripcion'] ?></label>
        </div>
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Enlace web</label>
                <label for="staticEmail" class="col-sm-2 col-form-label"><a href="<?php echo $publicacion['url']?>"> <?php echo $publicacion['url'] ?></a></label>
        </div>
        <td><a class="btn btn-primary" href="http://localhost/cursoCodeIgniter-Udemy/index.php/publicaciones/ver/<?php echo $publicacion['id_publicacion']?>" role="button">Modificar</a></td>
        <td><a class="btn btn-danger" href="http://localhost/cursoCodeIgniter-Udemy/index.php/publicaciones/ver/<?php echo $publicacion['id_publicacion']?>" role="button">eliminar</a></td>
    </form>
</div>
</body>
