<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Empresa</title>
    <link rel="shortcut icon" href="../img/logo superior.jpg" />
    <link rel="stylesheet" href="../css/all.css" />
    <link rel="stylesheet" href="../css/styles_flexbox_model.css" />
</head>

<body>
    <!-- Contenedor -->
    <div class="contenedor">
        <!-- Navegador -->
        <nav>
            <!-- Logo -->
            <div class="logo color-blanco">
            </div>
            <!-- Menú -->
            <div class="menu">
                <div class="m-home"><a href="../index.html">Inicio</a></div>
                <div class="m-portafolio"><a href="../index.html#portafolio">Portafolio</a></div>
                <div class="m-nosotros"><a href="../index.html#nosotros">Nosotros</a></div>
                <div class="m-contactenos"><a href="../index.html#contactenos">Contáctenos</a></div>
            </div>
            <!-- Ingreso -->
            <div class="ingreso color-negro">
                <div class="m-ingreso"><a href="login.html">Iniciar Sesión</a></div>
            </div>
        </nav>
        <!-- Separación del Nav -->
        <div class="tope"></div>
        <!-- Títulos de Páginas -->
        <div class="titulo">
            <h1>Tablas</h1>
        </div>
        <!-- Migas de Pan "Bread crums" -->
        <div class="migas color-gris-oscuro">
            <a href="../index.html#portafolio">Portafolio</a>
            <p> &nbsp / &nbsp</p>
            <a href="tablas.html">Tablas</a>
        </div>
        <section class="paginas color-blanco">
            <h3 class="subtitulo">Tablas en HTML y CSS</h3>
            <div class="table-scroll">
                <table class="table">
                    <tr>
                        <th class="centrar">Id</th>
                        <th class="centrar">Rol</th>
                        <th class="centrar">Nombres</th>
                        <th class="centrar">Apellidos</th>
                        <th class="centrar">Documento</th>
                        <th class="centrar">Correo</th>
                        <th class="centrar">Estado</th>
                        <th class="centrar">Acciones</th>
                    </tr>
                    <tr>
                        <td>ADM-123</td>
                        <td>Admin</td>
                        <td>E. Albeiro</td>
                        <td>Ramos V.</td>
                        <td>1000987654</td>
                        <td>profealbeiro2020@gmail.com</td>
                        <td>Activo</td>
                        <td class="tabla-acciones">
                            <a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
                            <a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>CLT-456</td>
                        <td>Cliente</td>
                        <td>Rosa María</td>
                        <td>Godines Salazar</td>
                        <td>1001565465</td>
                        <td>rosa@cliente.com</td>
                        <td>Activo</td>
                        <td class="tabla-acciones">
                            <a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
                            <a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>EMP-789</td>
                        <td>Empleado</td>
                        <td>Victor Rogelio</td>
                        <td>Carranza Rincón</td>
                        <td>1005987896</td>
                        <td>victor@empleado.com</td>
                        <td>Inactivo</td>
                        <td class="tabla-acciones">
                            <a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
                            <a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>EST-1234</td>
                        <td>Estudiante</td>
                        <td>Pepito</td>
                        <td>Perez</td>
                        <td>1101325355</td>
                        <td>pepito@estudiante.com</td>
                        <td>Activo</td>
                        <td class="tabla-acciones">
                            <a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
                            <a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>PRF-568</td>
                        <td>Profesor</td>
                        <td>José</td>
                        <td>Paternina Soto</td>
                        <td>7354256</td>
                        <td>jose@profesor.com</td>
                        <td>Activo</td>
                        <td class="tabla-acciones">
                            <a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
                            <a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>PRV-896</td>
                        <td>Proveedor</td>
                        <td>María</td>
                        <td>Auxiliadora</td>
                        <td>4035923</td>
                        <td>maria@proveedor.com</td>
                        <td>Inactivo</td>
                        <td class="tabla-acciones">
                            <a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
                            <a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>CNT-689</td>
                        <td>Contable</td>
                        <td>Heidy Sofía</td>
                        <td>González Espinosa</td>
                        <td>10078968921</td>
                        <td>sofia@contable.com</td>
                        <td>Inactivo</td>
                        <td class="tabla-acciones">
                            <a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
                            <a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>RCT-852</td>
                        <td>Rector</td>
                        <td>Amaranta</td>
                        <td>Perea Sigún</td>
                        <td>98546213</td>
                        <td>amaranta@rector.com</td>
                        <td>Inactivo</td>
                        <td class="tabla-acciones">
                            <a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
                            <a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>RHM-133</td>
                        <td>Recursos Humanos</td>
                        <td>Camila </td>
                        <td>Arriaga Beltrán</td>
                        <td>1000564683</td>
                        <td>camila@rrhh.com</td>
                        <td>Activo</td>
                        <td class="tabla-acciones">
                            <a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
                            <a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
        <!-- Pie de Página -->
        <footer class="color-negro">
            <div class="parrafo">
                <p>Todos los Derechos Reservados a:</p>
                <p>Instructor E. Albeiro Ramos V. © 2022</p>
                <p>earamos42@misena.edu.co / profealbeiro2020@gmail.com</p>
            </div>
        </footer>
    </div>
    <script src="../js/scripts.js"></script>
</body>

</html>