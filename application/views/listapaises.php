<div class="container">

<h2>Lista de Paises</h2>
  
  <?php echo form_open_multipart('paises/agregar'); ?>
          
            <button type="submit" class="btn btn-primary">Agregar</button>
          <?php echo form_close(); ?>


  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Pais</th>
        <th>Capital</th>
        <th>Clima</th>
        <th>poblacion</th>
        <th>hombres</th>
        <th>mujeres</th>
        <th>Modificar</th>
        <th>Eliminar</th>
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
        <td><?php echo $row->capital; ?></td>
        <td><?php echo $row->clima; ?></td>
        <td><?php echo $row->poblacion; ?></td>
        <td>
          <?php 
          $phombres=($row->hombres/$row->poblacion)*100; 
          if ($phombres>30) {
            $estilobarra="bg-succes";}
            else
              { $estilobarra="bg-warning";}

          ?>

          <div class="progress">
              <div class="progress-bar <?php echo $estilobarra ?>" style="width:<?php echo $phombres;?>%"><?php echo $phombres; ?>%</div>
          </div> 
        <td><?php echo $row->mujeres; ?></td>
        <td>
          <?php echo form_open_multipart('paises/modificar'); ?>
            <input type="hidden" name="idpais" value="<?php echo $row->idpais; ?>"></input>
           
            
            <button type="submit" class="btn btn-primary">Modificar</button>
            
            <?php echo form_close(); ?>
        </td>
         <td>
          <?php echo form_open_multipart('paises/eliminardb'); ?>
            <input type="hidden" name="idpais" value="<?php echo $row->idpais; ?>"></input>
             <input type="hidden" name="pais" value="<?php echo $row->pais; ?>"></input>
            <button type="submit" class="btn btn-primary">eliminar</button>
            
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