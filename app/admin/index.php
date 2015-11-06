<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../static/css/bootstrap/css/bootstrap.min.css">
  <script src="../../static/javascript/jquery-1.11.3.min.js"></script>
  <script src="../../static/javascript/bootstrap.min.js"></script>
  <script src="../../static/javascript/admin/gestor_menu.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="view/registro_usuario.html" target="_self" >Registrar</a></li>
            <li><a href="view/consultar_usuarios.php"  target="_self" >Modificar</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tecnicos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="view/registro_tecnico.html" target="_self" >Registrar</a></li>
            <li><a href="view/consultar_tecnico.php" target="_self" >Modificar</a></li>
          </ul>
        </li>
        <li><a href="view/tablero.php" target="_self"></span>Tablero</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div id="container" name="container" class="container">
 
</div>

</body>
</html>
