<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- jquery nuevos -->
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/librerias/jquery-3.6.0.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/js/librerias/jquery-ui.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/librerias/jquery-ui.js"></script>


  <!-- Bootstrap 4 CSS y js -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

 <!-- Bootstrap 4 iconos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  
<!-- sweetalert2 -->
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- configuracion de variables globales js -->
   <script src="<?php echo base_url(); ?>/assets/configuracion.js"></script>
   <style>
   #menu{
    width: 100%; /* hacemos que la cabecera ocupe el ancho completo de la página */
    left: 0; /* Posicionamos la cabecera al lado izquierdo */
    top: 0; /* Posicionamos la cabecera pegada arriba */
    position: fixed; /* Hacemos que la cabecera tenga una posición fija */
    z-index: 1;
    height:70px;
   }
   </style>
   
</head>



<body>
<nav id="menu" class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="../index.php/inicio"><img src="<?php echo base_url(); ?>/public/logo_delfin.png" width="150" height="20" id="inicio"></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>/index.php/Investigaciones">Investigaciones<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/index.php/Publicaciones">Publicaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/index.php/Tesis">Tesis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/index.php/Formacion">Formación</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/index.php/SitiosInteres">Sitios de interés</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/index.php/Integrantes">Integrantes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/index.php/Novedades">Novedades</a>
      </li>
    </ul>
    <?php
    $session = \Config\Services::session();
    if ($session->get('nombre') === null) {
    ?>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sesionModal" data-whatever="@mdo">Inicia sesión en la red &raquo;</button>
    <?php
    }
    if ($session->get('rol') == '2') {
      $cadena = $session->get('nombre');
      $array = explode(" ", $cadena);
      echo "hola " . $array[0] . "</br>";
    ?>
      <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menú de Usuario
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" href="<?php echo base_url(); ?>/index.php/Usuario/verPerfil">Perfil</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>/index.php/Usuario/listaInvestigaciones">Mis investigaciones</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>/index.php/Usuario/listaPublicaciones">Mis publicaciones</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>/index.php/Usuario/listaTesis">Mis Tesis</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>/index.php/Usuario/listaSitios">Mis sitios</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#logout">Cerrar sesión</a>
        </div>
      </div>
    <?php
    }
    if ($session->get('rol') == '1') {
      $cadena = $session->get('nombre');
      $array = explode(" ", $cadena);
      echo "Hola " . $array[0] . "</br>";
    ?>
     <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu Admin
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" href="<?php echo base_url(); ?>/index.php/admin/perfil">Perfil</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>/index.php/admin/listaUsuarios">Adm Usuarios</a>
          <a class="dropdown-item" href="#">Publicaciones</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#logout">Cerrar sesión</a>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</nav>
  <!-- Esta parte es del modal-->
  <div class="modal fade" id="sesionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Inicia sesión</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url(); ?>/index.php/Usuario/auth " method="POST" class="form">
            <div class="form-group">
              <label>Correo</label>
              <input type="email" class="form-control" name="correo" placeholder="email@ejemplo.com">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Contraseña</label>
              <input type="text" class="form-control" name="contrasena" placeholder="password">
            </div>
            <div class="col-auto my-1">
              <button class="btn btn-primary">Iniciar sesión</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <a href="<?php echo base_url(); ?>/index.php/Usuario/crear">Si no estás registrado, crea tu cuenta</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Seguro que quieres cerrar sesión?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <a  class="btn btn-primary" href="<?php echo base_url(); ?>/index.php/Usuario/cerrar">Confirmar</a>

        </div>
      </div>
    </div>
  </div>
  </body>