<?php session_start(); ?>
<?php
date_default_timezone_set('US/Central');
$hora = date("G");
$fondoInicial = "fondo" . $hora . ".svg";
$conn = include "conexion/conexion.php";

if (isset($_GET['fecha'])) {
	$fecha_consultar = $_GET['fecha'];
} else {
	$fecha_consultar = date("Y-m-d");
}

$fecha_formateada = '';
if (isset($fecha_consultar) && !empty($fecha_consultar)) {
    $fecha = DateTime::createFromFormat('Y-m-d', $fecha_consultar);
    $fecha_formateada = $fecha->format('d-m-Y');
}




$nahual = include 'backend/buscar/conseguir_nahual_nombre.php';
$energia = include 'backend/buscar/conseguir_energia_numero.php';
$id = include 'backend/buscar/conseguir_energia_numero.php';
$haab = include 'backend/buscar/conseguir_uinal_nombre.php';
$cuenta_larga = include 'backend/buscar/conseguir_fecha_cuenta_larga.php';
$cholquij = $nahual . " " . strval($energia);
$partes = explode(" ", $cholquij);
$energia = end($partes);
//Añadiendo para la infografia
$fuerza=$energia;
$nahual_info = include 'backend/buscar/conseguir_significado_nahual.php';
$energia_info = include 'backend/buscar/conseguir_significadoo_energia.php';
$img1 = strtolower(str_replace("'", "", preg_replace("/([\']+|\w+) (\d+)/", '${1}', $cholquij)));
$img2 = strtolower(str_replace("'", "", $energia));
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/piramide-maya.png">
	<link rel="preload" href="../img/fondo/<?php echo $fondoInicial; ?>" as="image">
	<style>
		#inicio {
			background-image: url('../img/fondo/<?php echo $fondoInicial; ?>');
			background-size: cover;
			background-position: center;
		}
	</style>
	<title>Tiempo Maya - Calculadora de Mayas</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<?php include "blocks/bloquesCss.html" ?>
	<link rel="stylesheet" href="css/estilo.css?v=<?php echo (rand()); ?>" />
	<link rel="stylesheet" href="css/calculadora.css?v=<?php echo (rand()); ?>" />
	<link rel="stylesheet" href="css/animation.css" />
	<link rel="stylesheet" href="css/infografia.css" />
	
</head>

<body>
	<?php include "NavBar.php" ?>
	<div>
		<section id="inicio">
			<div id="inicioContainer" class="inicio-container">

				<div id='formulario'>
					<h1>Calculadora</h1>
					<form action="#" method="GET">
						<div class="mb-1">
							<label for="fecha" class="form-label">Fecha</label>
							<input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo isset($fecha_consultar) ? $fecha_consultar : ''; ?>">
						</div>
						<button type="submit" class="btn btn-get-started"><i class="far fa-clock"></i> Calcular</button>
					</form>

					<div id="tabla">
						<table class="table table-dark table-striped">
							<thead>
								<tr>
									<th scope="col">Calendario</th>
									<th scope="col" style="width: 60%;">Fecha</th>

								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">Calendario Haab</th>
									<td><?php echo isset($haab) ? $haab : ''; ?></td>
								</tr>
								<tr>
									<th scope="row">Calendario Cholquij</th>
									<td><?php echo isset($cholquij) ? $cholquij : ''; ?></td>
								</tr>
								<tr>
									<th scope="row">Cuenta Larga</th>
									<td><?php echo isset($cuenta_larga) ? $cuenta_larga : ''; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
	</div>
	</section>
	<section id="infografia">
		<div id="infografia">
			<h1>Infografia</h1>
			<div id="subtitle">
				<strong>Del dia : </strong><?php echo isset($fecha_formateada) ? $fecha_formateada : ''; ?>
			</div>
			<ul id="info">
				<?php 
					echo "<li><strong>Su Nahual : </strong>" . ucfirst($img1) . "</li>";
					echo "<li align='center'; ><img src='../img/nahual/" . $img1 . ".png' class='index-img' /></li>";
					echo "<li><strong>Significado : </strong>$nahual_info</li>";
					echo "<li><strong>Su Energia : </strong>" . $energia_info['nombre'] . "(". $id . ")</li>";
					echo "<li style='text-align: center;'><img src='../img/energia/" . strtolower(str_replace("'", "", $energia_info['nombre']))  . ".png' class='index-img' /></li>";
					echo "<li><strong>Significado : </strong>" . $energia_info['significado'] . "</li>";
					echo "<li><strong>Calendario Cholquij : </strong>" . $cholquij . "</li>";
					echo "<li><strong>Cuenta Larga : </strong>" . $cuenta_larga . "</li>";
					?>
			</ul>
		</div>
	</section>


	<?php include "blocks/bloquesJs1.html" ?>
	<script src="js/animation.js"></script>
</body>
</html>