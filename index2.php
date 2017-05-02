<!--
Este es el layout principal, a partir de este layout o plantilla se muestran el resto de "vistas"
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>.: S.A.F.O :.</title>
    <link href="res/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.min.css">
     <link href="css/landing-page.css" rel="stylesheet">
    <script src="res/js/jquery.min.js"></script>
    <link rel="shortcut icon" href="dist/img/favicon.ico"> 
  </head>

  <body  Background="dist/img/intro-bg.jpg" no-repeat center center;>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./"><b>Sistema Todos Para Uno</b></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./"><i class='glyphicon glyphicon-home'></i> INICIO</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class='glyphicon glyphicon-th-large'></i> MAS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="./?view=login">Login</a></li>
            <li><a href="./?view=help">Ayuda</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION["user_id"])):?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="./?view=home">Mi inicio</a></li>
            <li><a href="./?view=users&o=all">Usuarios</a></li>
            <li class="divider"></li>
            <li><a href="./?view=access&o=logout">Salir</a></li>
          </ul>
        </li>
        <?php endif; ?>
      </ul>

    </div>
  </div>
</nav>

<div class="container">
<div class="row">
<div class="col-md-12">
<!-- Header -->
    <a name="about"></a>

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                    <div align="center">
                    <font color="white">
                        <h1>SAFO</h1>
                        <h3>System All For One</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="./core/app/view/Acerca-view.php" class="btn btn-default btn-lg"><i class="fa fa fa-magic fa-fm"></i> <span class="network-name">Que es</span></a>
                            </li>
                            <li>
                                <a href="./Usuarios/index.php" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Iniciar Sesion</span></a>
                            </li>
                            <li>
                                <a href="./administrador/index.php" class="btn btn-default btn-lg"><i class="fa fa-code fa-fu"></i> <span class="network-name">Administrador</span></a>
                            </li>
                        </ul>
                        </font>
                        <br>
                        <hr>
                        <p class="text-muted text-center">Powered by SAFO &copy; 2017</p>

                    </div>
                </div>
          



<script src="res/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
