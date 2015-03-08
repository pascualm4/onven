<!DOCTYPE html>
<html>
  <head>
    <?php echo $this->Html->charset(); ?>
    <title>
      <?php echo $this->fetch('title'); ?>
    </title>
    <?php
      echo $this->Html->meta('icon');

      echo $this->Html->css(array('style', 'superhero'));

      echo $this->fetch('meta');
      echo $this->fetch('css');
      echo $this->fetch('script');
    ?>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('Onven', array('controller'=>'Pages', 'action' => 'index'), array('class' => 'navbar-brand'));?>
        </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav">
          <li><?php echo $this->Html->link('Nosotros', array('controller' => 'Pages', 'action' => 'about'));?></li>
          <li><?php echo $this->Html->link('Servicios', array('controller' => 'Pages', 'action' => 'services'));?></li>
          <li><?php echo $this->Html->link('Portafolio', array('controller' => 'Projects', 'action' => 'index'));?></li>
          <li><?php echo $this->Html->link('Productos', array('controller' => 'Products', 'action' => 'index'));?></li>
          <li><?php echo $this->Html->link('Contacto', array('controller' => 'Pages', 'action' => 'contact'));?></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Iniciar Sesi&oacute;n</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <div id="container">
      <?php echo $this->fetch('content'); ?>    
    </div>

    <footer>
      <section id="copyrights-wrapper">
        <div class="footer-content">
          <div class="left-column">
            <p>2015 Onven Consultores. Todos los derechos reservados.</p>
          </div>
          <div class="right-column">
            <p>Diseñado y mantenido por:  <?php 
            echo $this->Html->link("<span class='deltatech-fly'></span>",
              array('controller'=>'home', 'action' => 'index'), array('escape' => false));
            ?></p>
          </div>
        </div>
    </section>
    </footer>
  </body>
</html>
