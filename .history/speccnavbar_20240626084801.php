<!-- Este código es una barra de navegación personalizada en HTML y PHP que utiliza el framework Bootstrap. La navbar se utiliza para mostrar la marca de la aplicación con el nombre del usuario actualmente logueado y un botón de logout. El botón toggle se utiliza para mostrar y ocultar los elementos de navegación en dispositivos móviles. La navbar también incluye dos opciones de menú: "Main Menu" y "Super Admin Options", que se despliegan o se ocultan según sea necesario. El código utiliza variables de sesión para mostrar el nombre del usuario logueado y un enlace de logout que redirige a una página de cierre de sesión. -->
<nav style="border-radius:0px; height:20px;background-color:#FFF" class="navbar navbar-default">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <p class="navbar-brand">Welcome <?php echo $_SESSION['sadmun']; ?>! <a href="dminlogout.php">Logout</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li><a  href="menu.php">Main Menu</a></li>
        <li><a  href="superadmin.php">Super Admin Options</a></li>

      </ul>

    </div>
  </div>
</nav>
