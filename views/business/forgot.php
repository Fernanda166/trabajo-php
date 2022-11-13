<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Empresa</title>
	<link rel="shortcut icon" href="../img/imagen-card.jpg">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
	<link rel="stylesheet" href="../css/all.min.css">
	<link rel="stylesheet" href="../css/styles_flexbox_model.css">
</head>

<body>
	<!-- Contenedor -->
	<div class="contenedor" id="contenedor">
		<!-- Navegador -->
		<nav>
			<div class="logo">
				<img src="../img/logo xd.jpg" alt="">
			</div>
			<div class="menu">
				<div class="m-home"><a href="../index.html#">Inicio</a></div>
				<div class="m-portafolio"><a href="../index.html#portafolio">Portafolio</a></div>
				<div class="m-nosotros"><a href="../index.html#nosotros">Nosotros</a></div>
				<div class="m-contactenos"><a href="../index.html#contactenos">Contáctenos</a></div>
			</div>
			<div class="ingreso">
				<div class="m-ingreso"><a href="login.html">Iniciar Sesión</a></div>
			</div>
		</nav>
		<div class="tope"></div>
		<div class="titulo">
			<h1>Olvido de Contraseña</h1>
		</div>
		<div class="migas color-gris-oscuro">
			<a href="login.html">Inicio</a>
			<p> &nbsp / &nbsp</p>
			<a href="forgot.html">Olvido de Contraseña</a>
		</div>
		<section class="paginas forms color-gris-claro">
			<form class="form form-forgot" action="login.html" method="post" name="formForgot">
				<h2 class="form-subtitulo">Olvido de Contraseña</h2>
				<div class="form-cuerpo color-blanco">
					<div class="form-control">
						<label class="label" for="correo-olv">Correo</label>
						<input class="input" type="email" id="correo-olv" placeholder="Correo Usuario"
							placeholder="Correo Usuario"
							pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}"
							title="Ingrese un correo válido" required>
					</div>
				</div>
				<div class="form-pie">
					<input type="reset" id="cancelar-olvido" value="Cancelar">
					<input type="submit" id="submit-olvido" value="Enviar">
				</div>
			</form>
		</section>
		<!-- Pie de página -->
		<footer>
			<div class="parrafo">
				<p>Todos los Derechos Reservados a:</p>
				<p>Instructor E. Albeiro Ramos V. © 2022</p>
				<p>earamos42@misena.edu.co / profealbeiro2020@gmail.com</p>
			</div>
		</footer>
	</div>
	<script src="../js/sweetalert.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
	<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>
	<script src="../js/scripts.js"></script>
</body>

</html>