function guardar(){

    var _idEmp = document.getElementById("idemp").value;
    var _nombre = document.getElementById("nombre").value;
    var _apellido = document.getElementById("apellido").value;
    var _numemp = document.getElementById("numemp").value;
    var _area = document.getElementById("area").value;
    var _tipoUs = document.getElementById("tipo_usuario").value;

    var fila="<tr>"+
      "<td>"+_idEmp+"</td>"+
      "<td>"+_nombre+"</td>"+
      "<td>"+_apellido+"</td>"+
      "<td>"+_numemp+"</td>"+
      "<td>"+_area+"</td>"+
      "<td>"+_tipoUs+"</td>"+
      "<td><button>editar</button></td>"+
      "<td><button>eliminar</button></td>"+
      "</tr>";

    var btn = document.createElement("TR");
    btn.innerHTML=fila;
    document.getElementById("Usuarios").appendChild(btn);


     if (confirm('¿Agregar usuario nuevo?')) {
       document.form1.submit();
       document.getElementById("myForm").reset();
    }
}