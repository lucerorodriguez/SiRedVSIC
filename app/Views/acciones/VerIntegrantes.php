<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  position: static;
}

.title {
  color: grey;
  font-size: 18px;
}

p button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.link {
  text-decoration: none;
  font-size: 22px;
  color: blue;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<br>
<br>
<br>
<h2 style="text-align:center">Integrantes</h2>
<?php
      foreach ($integrantes as $integrante) :
      ?>
<div class="card">
  <img src="<?php echo base_url(); ?>/public/assets/files/perfil.jpg" alt="perfil" style="width:100%">
  <h1><?php echo  $integrante['nombre'] ?></h1>
  <p class="title"><?php echo  $integrante['linea_investigacion'] ?></p>
  <p><?php echo  $integrante['institucion'] ?></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="link fa fa-dribbble"></i></a> 
    <a href="#"><i class="link fa fa-twitter"></i></a>  
    <a href="#"><i class="link fa fa-linkedin"></i></a>  
    <a href="#"><i class="link fa fa-facebook"></i></a> 
  </div>
  <p><button>Contacto</button></p>
</div>
<?php endforeach; ?>
</body>
</html>