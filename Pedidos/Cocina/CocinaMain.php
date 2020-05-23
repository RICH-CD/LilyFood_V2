<?php
require('../FuncionesPedidos.php');
$menu = ObtenerMenuAnidada();
$pedidos = ObtenerPedidosActivos(); 
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
		function cobrar(pedido)
		{
			window.location="MeseroCobrar.php?pedido="+pedido;
		}	
        function actualizar(){location.reload(true);}
//Función para actualizar cada 4 segundos(4000 milisegundos)
  setInterval("actualizar()",10000);
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

<!-------Contenedor izq------>
<div class="izq">
<center style="all: unset; color:#5AA6ED; font-style: bold; font-size: 30px; align-content: center;">Para Aqui</center>
                    <?php
                    foreach($pedidos as $p)
					{	
                        if($p['LugarID']==1)
                        {
                        $sumatoria = 0;	
                        ?>
                        <center><table width="99%"><tr><td colspan="3" align="center">
                            <?php	    
                        echo "Pedido Numero: ".$p['NoPedido'];  
                        $desglose = ObtenerDesglosePedido($p['NoPedido']);
                        echo "</td></tr>";
                        ?>
                            <tr>
                            <td width="33%">
                            No Plato
                            </td>
                            <td width="33%">
                                Cantidad
                            </td>
                            <td width="33%">
                               Platillo
                            </td>
                        </tr>
                        <?php
                        foreach($desglose as $d)
					    {	
                        ?>
                        <tr>
                            <td width="33%">
                            <span style="color:#000000; font-style: bold; font-size: 15px;" > <?php echo $d['NoPlato']; ?></span>
                            </td>
                            <td width="33%">
                            <span style="color:#000000; font-style: bold; font-size: 15px;" > <?php echo $d['Cantidad']; ?></span>
                            </td>
                            <td width="33%">
                            <span style="color:#000000; font-style: bold; font-size: 15px;" > <?php echo $d['Platillo']; ?></span>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table></center><br><br><br>
                        <?php
                        }
					}

?>
</div>
                    <!----fin contenedor izq----->
                    <!-----------div derecho---->
                    <div class="der">
                    <center style="all: unset; color:#5AA6ED; font-style: bold; font-size: 30px; align-content: center;">Para Llevar</center>
                    <?php
                    foreach($pedidos as $p)
					{	
                        if($p['LugarID']==2)
                        {
                        $sumatoria = 0;	
                        ?>
                        <center><table width="99%"><tr><td colspan="3" align="center">
                            <?php	    
                        echo "Pedido Numero: ".$p['NoPedido'];  
                        $desglose = ObtenerDesglosePedido($p['NoPedido']);
                        echo "</td></tr>";
                        ?>
                            <tr>
                            <td width="33%">
                            No Plato
                            </td>
                            <td width="33%">
                                Cantidad
                            </td>
                            <td width="33%">
                               Platillo
                            </td>
                        </tr>
                        <?php
                        foreach($desglose as $d)
					    {	
                        ?>
                        <tr>
                            <td width="33%">
                                <span style="color:#000000; font-style: bold; font-size: 15px;" ><?php echo $d['NoPlato']; ?> </span>
                            </td>
                            <td width="33%">
                            <span style="color:#000000; font-style: bold; font-size: 15px;" ><?php echo $d['Cantidad']; ?></span>
                            </td>
                            <td width="33%">
                            <span style="color:#000000; font-style: bold; font-size: 15px;" ><?php echo $d['Platillo']; ?></span>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table></center><br><br><br>
                        <?php
                        }
					}

?>
</div>
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
