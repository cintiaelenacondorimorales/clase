<div class="container">
  <?php echo form_open_multipart('paises/agregardb'); ?>
  <input type="text" name="pais" placeholder="ingrese pais"> </input>
  <input type="text" name="capital" placeholder="ingrese capital"> </input>
  <input type="text" name="clima" placeholder="ingrese clima"> </input>
  <input type="text" name="poblacion" placeholder="ingrese poblacion"> </input>
  <input type="text" name="hombres" placeholder="ingrese hombres"> </input>
  <input type="text" name="mujeres" placeholder="ingrese mujeres"> </input>
  
            <button type="submit" class="btn btn-primary">agregar</button>
          <?php echo form_close(); ?>
      
    
    
 </div>