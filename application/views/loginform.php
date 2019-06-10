<div class="container">
  <?php echo form_open_multipart('usuarios/validarusuario'); ?>
  <input type="text" name="login" placeholder="Ingrese login"> </input>
  <input type="text" name="pasword" placeholder="Ingrese password"> </input>

  
            <button type="submit" class="btn btn-primary">Ingresar</button>
          <?php echo form_close(); ?>
      
    
    
 </div>