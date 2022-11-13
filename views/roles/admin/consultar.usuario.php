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
      <div class="prueba"><h1>consultar usuario</h1>
        <div class="cerrar"><a href="crear.usuario.html">Crear usuario</a> </div>
    </div>  
    <div class="table-responsive">
        <table id="Usuarios" class="table table-bordered table-striped table-hover">
        <thead>
        <tr class="table-header">
          <th>ID</th>
          <th>Número de empleado</th>
          <th>Área</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Tipo de Usuario</th>
          <th>Opciones</th>
        </tr>
        </thead>
        <tbody>
          <tr role="row" class="odd">
          </tr>
        </tbody>
        </table>
        </div>
        
        
        <div class="container">
        
        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Add_Us_New">
          Agregar Usuario Nuevo
        </button>
        </div>
        <!-- tabla de usuarios -->
        <div class="modal fade" id="Add_Us_New">
          <div class="modal-dialog"> 
            <div class="modal-content">
              <div class="modal-header">
                <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title">Agregar Usuario</h4>
                  </div>
                  <div>
                    <p>
                      <label>ID Empleado</label> <br>
                      <input id="idemp" class="form-control" type="text" placeholder="ID Empleado"><br>
                    </p>
                    <p>
                      <label>Nombre</label> <br>
                      <input id="nombre" class="form-control" type="text" placeholder="Nombre"><br>
                    </p>
                    <p>
                      <label>Apellido</label> <br>
                      <input id="apellido" class="form-control" type="text" placeholder="Apellido"> <br>
                    </p>
                    <p>
                      <label>Número de Empleado</label> <br>
                      <input id="numemp" class="form-control" type="text" placeholder="Número"> <br>
                    </p>
                    <p>
                      <label>Área</label> <br>
                      <input id="area" class="form-control" type="text" placeholder="Área"> <br>
                    </p>
                    <p>
                      <label>Tipo de Usuario</label> <br>
                      <input id="tipo_usuario" class="form-control" type="text" placeholder="Tipo de Usuario"> <br>
                    </p>
                  </div>
                  <div class="modal-footer">
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                   <button id="btn_guardar" class="btn btn-success" onclick="guardar()">Guardar</button><br>
                   </div>  
                </div>
               </div>
              </div>
            
    <script type="text/javascript" src="js/jquery.slim.min.js"></script>
    <script type="text/javascript" src="js/usuario.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>