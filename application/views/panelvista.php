<div class="container">
  <h1>Panel de Usuario <?php echo $this->session->userdata('tipo'); ?></h1>
      
    <a href="<?php echo base_url(); ?>index.php/usuarios/logout">Cerrar Sesion</a>

    <h2>Bienvenido(a) <?php echo $this->session->userdata('login');?></h2>
    
 </div>