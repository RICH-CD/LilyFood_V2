<?php
require('../FuncionesPedidos.php');
$menu = ObtenerMenuAnidada();
$pedidos = $_GET['noPedido'];
?>
<html>
	<head>
	
	<meta charset=utf-8 />
		<title>Menu Principal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../assets/css/main.css" />
		<link rel="stylesheet" href="../pedidos.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
		<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

		<script type="text/javascript">
        function resta(total)
        {
            
            var pago = parseFloat(document.getElementById("pago").value);
            var vuelto = pago-total;
            document.getElementById("vuelto").innerHTML = vuelto;
        }
        function regresar()
        {
            window.location="MeseroPedidos.php";
        }
        function eliminar(id)
        {
            sendAjax(id);
            setInterval("actualizar()",2000);
        }
        function sendAjax(id)
    	{
			try{
				var dat = "op=2&id="+id;
				
				//alert(dat);
				$.ajax({
					url: 'MeseroAuxiliar.php',
					type: 'POST',
					data: dat,
				})
				.done(function(){
					Swal.fire("Platillo Eliminado");
					unselect();
				})
				.fail(function(){
					Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Algo salio mal vuelve a intentar, si el problema persiste llama a RICH',
				footer: ':('
				});
				});
			}catch(e)
			{
				alert(e);
			}
    	}
        function actualizar(){location.reload(true);}
		</script>
</head>
	<body class="subpage">
	<!-- Header -->
	<header id="header">
		<div class="logo"><a href="../../index.php">Lily <span>food</span></a>
        </div>
			<a href="#menu">Menu</a>
	</header>

		<!-- Nav -->
		<nav id="menu">
			<ul class="links">
				<li>Acceso Rapido</li>	
				<?php
					foreach($menu as $m)
					{			    
						echo "<ul><a href='../Guisos/".$m['URL']."'>".$m['Menu']."</ul>";
					}
					?>
				<li><a href='../../index.php'><br>Cerrar Sesion</a><li>
			</ul>
			</nav>

	
<!-- Main -->
<div id="main">
			<section class="wrapper style1">
			    <div class="inner">
<!-------------Contenido body--->
                    <?php
                    	
                        $sumatoria = 0;	
                        ?>
                        <center><table width="99%"><tr><td colspan="4" align="center">
                            <?php	    
                        echo "Pedido Numero: ".$pedidos;  
                        $desglose = ObtenerDesglosePedido($pedidos);
                        echo "</td></tr>";
                        ?>
                            <tr>
                            <td width="25%">
                                Cantidad
                            </td>
                            <td width="25%">
                               Platillo
                            </td>
                            <td width="25%">
                               Costo
                            </td>
                            <td width="25%">
                               Eliminar
                            </td>
                        </tr>
                        <?php
                        foreach($desglose as $d)
					    {	
                        ?>
                        <tr>
                            <td width="25%">
                                <?php echo $d['Cantidad']; ?>
                            </td>
                            <td width="25%">
                                <?php echo $d['Platillo']; ?>
                            </td>
                            <td width="25%">
                                <?php
                                $precio = ($d['Cantidad']*$d['Costo']);
                                $sumatoria += $precio;
                                echo $precio; ?>
                            </td>
                            <td width="25%">
                                <?php echo "<button onclick='eliminar(".$d['PedidoID'].")'>Quitar</button>"; ?>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        <tr><td colspan="4" align="center"><button onclick="regresar()">Regresar</button></td></tr>
                    </table></center><br><br><br>
                        <?php
					

?>
					
			    </div>
					</section>
			</div>

<!-- Scripts -->
			<script src="../../assets/js/jquery.min.js"></script>
			<script src="../../assets/js/jquery.scrolly.min.js"></script>
			<script src="../../assets/js/jquery.scrollex.min.js"></script>
			<script src="../../assets/js/skel.min.js"></script>
			<script src="../../assets/js/util.js"></script>
			<script src="../../assets/js/main.js"></script>
				</body>
</html>
