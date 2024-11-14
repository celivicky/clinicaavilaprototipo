Este código HTML y PHP crea una barra de navegación (navbar) para una aplicación web. La barra de navegación muestra el nombre del usuario que ha iniciado sesión y proporciona un enlace para cerrar la sesión. Además, ofrece un enlace para volver al menú principal de la aplicación
<nav style="border-radius:0px; height:20px;background-color:#FFF" class="navbar navbar-default">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <p class="navbar-brand">Hola de nuevo, te has autenticado como <?php echo $_SESSION['sadmun']; ?>! <a href="sadminlogout.php">Cerrar Sesión</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li><a  href="menu.php">Volver al menú principal</a></li>
    </ul>

    </div>
  </div>
</nav>
