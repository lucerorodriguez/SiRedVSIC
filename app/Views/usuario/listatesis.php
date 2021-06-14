</br></br>
<div class="container">
<br><br>
  <a class="btn btn-primary" href="<?php echo base_url(); ?>/index.php/usuario/crearTesis" role="button">Agregar Tesis</a>
  </br></br>
  <table class="table" id="tb3">
    <thead>
      <tr>
        <th scope="col">#Id</th>
        <th scope="col">Tesista</th>
        <th scope="col">Tema</th>
        <th scope="col">Descripción</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($tesis as $tes) :
      ?>
        <tr tesisID = "<?php echo $tes['id_tesis'] ?>">
          <th scope="row"> <?php echo $tes['id_tesis'] ?></th>

          <?php echo "<td>" . $tes['tesista'] . "</td>" ?>
          <?php echo "<td>" . $tes['tema_tesis'] . "</td>" ?>
          <?php echo "<td>" . $tes['descripcion'] . "</td>" ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <script>

</script>
</div>
<script src="<?php echo base_url(); ?>/assets/js/tesis/listaTesis.js"></script>