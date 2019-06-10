<div class="container">

<h2>Lista de Paises</h2>
  
  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Pais</th>
        <th>Modificar</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $indice=1;
    foreach ($paises->result() as $row) {
      ?>
      <tr>
        <td><?php echo $indice; ?></td>
        <td><?php echo $row->pais; ?></td>
        <td>
          <?php echo form_open_multipart('welcome/modificar'); ?>
            <input type="hidden" name="idpais" value="<?php echo $row->idpais; ?>"></input>
            <button type="submit" class="btn btn-primary">Modificar</button>
          <?php echo form_close(); ?>
        </td>
      </tr>
      <?php
      $indice++;
    }
    ?>
    </tbody>
  </table> 

 </div>