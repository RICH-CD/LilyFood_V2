<?php
require('../FuncionesPedidos.php');
$menu = ObtenerMenuAnidada();
$pedidos = $_GET['pedido'];
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
		function Finalizar(pedido)
		{
            //lert(pedido);
			window.location="Meserofinalizar.php?pedido="+pedido;
		}	
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
                        <center><table width="99%"><tr><td colspan="3" align="center">
                            <?php	    
                        echo "Pedido Numero: ".$pedidos;  
                        $desglose = ObtenerDesglosePedido($pedidos);
                        echo "</td></tr>";
                        ?>
                            <tr>
                            <td width="33%">
                                Cantidad
                            </td>
                            <td width="33%">
                               Platillo
                            </td>
                            <td width="33%">
                               Costo
                            </td>
                        </tr>
                        <?php
                        foreach($desglose as $d)
					    {	
                        ?>
                        <tr>
                            <td width="33%">
                                <?php echo $d['Cantidad']; ?>
                            </td>
                            <td width="33%">
                                <?php echo $d['Platillo']; ?>
                            </td>
                            <td width="33%">
                                <?php
                                $sumatoria += $d['Costo'];
                                echo $d['Costo']; ?>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <td colspan="2" width="66%">
                                Total
                            </td>
                            <td width="33%">
                            <center style="all: unset; color:#5AA6ED; font-style: bold; font-size: 20px; align-content: center;">
                                <?php echo "$".$sumatoria; 
                                
                                ?>
                            </center>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" width="66%">
                                Pago
                            </td>
                            <td width="33%">
                            <center style="all: unset; color:#5AA6ED; font-style: bold; font-size: 20px; align-content: center;">
                                <input name="pago" id="pago" type="text" onkeyup="resta(<?php echo $sumatoria; ?>)">
                            </center>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" width="66%">
                                Vuelto
                            </td>
                            <td width="33%">
                            <center style="all: unset; color:#FF0000; font-style: bold; font-size: 20px; align-content: center;">
                                <p id="vuelto">$</p>
                            </center>
                            </td>
                        </tr>
                        <tr><td colspan="3" align="center"><button onclick="Finalizar(<?php echo $pedidos; ?>)">Finalizar</button></td></tr>
                        <tr><td colspan="3" align="center"><button onclick="regresar()">Regresar</button></td></tr>
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
