<?php
require('../FuncionesPedidos.php');
$menu = ObtenerMenuAnidada();
$platillos = ObtenerPlatillo();
$Guisos = ObtenerGuisos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pedidos.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
		function recuperainfo(){
			var lugar = document.querySelector('input[name = "Lugar"]:checked').value;
			alert(lugar);
		}
		</script>
    <title>Pedido</title>
</head>
<body>
<!-------------------------------------------------------------Panel 1 Lugar --->
<div class="scrollHorizontal">
						Para LLevar o para Aqui
<table class="tabla_panel">
<tr>
<td class="td_panel">
<input type="radio" name="Lugar" value="1">Comer Aqui
</td>
<td class="td_panel">
<input type="radio" name="Lugar" value="2">Para Llevar
</td>
<td class="td_panel">
<input type="radio" name="Lugar" value="3">Comer Aqui3
</td>
<td class="td_panel">
<input type="radio" name="Lugar" value="4">Para Llevar4
</td>
<td class="td_panel">
<input type="radio" name="Lugar" value="5">Comer Aqui1
</td>
<td class="td_panel">
<input type="radio" name="Lugar" value="6">Para Llevar1
</td>
<td class="td_panel">
<input type="radio" name="Lugar" value="7">Comer Aqui31
</td>
<td class="td_panel">
<input type="radio" name="Lugar" value="8">Para Llevar41
</td>
</tr></table>
</div>

<!---------------------------------------------------Acciones------------------------------------->
<div class="scrollHorizontal">
					<!--vamos a enviar como parametro el numero de pedido-->
						   <center><button onclick="recuperainfo()">Guardar</button></center>
					</div>
</body>
</html>