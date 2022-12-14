<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Empresa</title>
    <link rel="shortcut icon" href="../img/imagen-card.jpg" />
    <link rel="stylesheet" href="../css/all.css" />
    <link rel="stylesheet" href="../css/styles_flexbox_model.css" />
</head>

<body>
    <!-- Contenedor -->
    <div class="contenedor captura-id">
        <!-- Navegador -->
        <nav>
            <!-- Logo -->
            <div class="logo color-blanco">
                <img src="../img/oekd.png" alt="logo" title="logo" />
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
        <h1 class="titulo">Iniciar Sesión</h1>
        <!-- Migas de Pan "Bread crums" -->
        <div class="migas color-gris-oscuro">
            <a href="../index.html">Inicio</a>
            <p> &nbsp / &nbsp</p>
            <a href="login.html">Iniciar Sesión</a>
        </div>
        <section class="paginas forms color-gris-claro">
            <form class="form form-login" id="formSession">
                <a class="enlace-registro" href="">Registro</a>
                <h2 class="form-subtitulo">Iniciar Sesión</h2>
                <div class="form-cuerpo color-blanco">
                    <div class="form-control">
                        <label class="label" for="correo">Correo</label>
                        <input class="input" type="email" id="correo" placeholder="usuario@correo.com" title="Escriba un correo válido" placeholder="Correo Usuario" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}" required>
                    </div>
                    <div class="form-control">
                        <label class="label" for="pass">Contraseña</label>
                        <input class="input" type="password" id="pass" placeholder="Escriba entre 5 y 8 caracteres" title="Escriba entre 5 y 8 caracteres" minlength="5" maxlength="8" required>
                    </div>
                </div>
                <div class="form-pie">
                    <input type="reset" value="Cancelar">
                    <input type="submit" id="submint_login" value="Enviar">
                </div>
                <a class="enlace-olvido" href="">¿Olvidó su Contraseña?</a>
            </form>
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