
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
<body>
<br>
<br>
<br>

<h2 style="text-align:center">Integrantes</h2>
<div class="card-columns" style="width: 100%; padding-left: 15%; padding-right: 15%;">
  <?php
        foreach ($integrantes as $integrante) :
        ?>
  <div class="card">
    <img class="card-img-top" src="<?php echo base_url(); ?><?php echo $integrante['foto_perfil'] ?>" alt="perfil" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo  $integrante['nombre'] ?></h5>
      <p class="card-text"><?php echo  $integrante['linea_investigacion'] ?></p>
      <p class="card-text"><small class="text-muted"><?php echo  $integrante['institucion'] ?></small></p>
      <p><button>Contacto</button></p>
    </div>

  </div>
  <?php endforeach; ?>
</div>

</body>