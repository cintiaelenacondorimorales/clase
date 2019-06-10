<div class="container">
    <?php
    foreach ($pais->result() as $row) {
      ?>
          <?php echo form_open_multipart('paises/modificardb'); ?>
  <input type="hidden" name="idpais" value="<?php echo $row->idpais; ?>"></input>
  
  <input type="text" name="pais" value="<?php echo $row->pais; ?>"></input>
  <input type="text" name="capital" value="<?php echo $row->capital; ?>"></input>
  <input type="text" name="clima" value="<?php echo $row->clima; ?>"></input>
  <input type="text" name="poblacion" value="<?php echo $row->poblacion; ?>"></input>
  <input type="text" name="hombres" value="<?php echo $row->hombres; ?>"></input>
  <input type="text" name="mujeres" value="<?php echo $row->mujeres; ?>"></input>
            <button type="submit" class="btn btn-primary">Modificar</button>
          <?php echo form_close(); ?>
      <?php
    }
    ?>
 </div>