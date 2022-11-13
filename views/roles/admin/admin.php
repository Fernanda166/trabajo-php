<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles_flexbox_model.css">  
    <title>Sistema de Información</title>
</head>
<body>
    <!-- contenedor superior -->
    <div class="contenedor captura-id"></div> 
      <div class="prueba"><h1>Soy el Dashboard del Administrador</h1>
        <div class="cerrar"><a href="index.html">Cerrar Sesión</a> </div>
    </div>  
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
         Modulo usuario
        </a>
      
        <div class="dropdown-menu">
          <a class="dropdown-item" href="crear.usuario.html">Crear usuario</a>
          <a class="dropdown-item" href="consultar.usuario.html">Consultar usuario</a>
        </div>
      </div>
      <script type="text/javascript" src="js/jquery.slim.min.js"></script>
      <script type="text/javascript" src="js/popper.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>