<?php
require('../FuncionesPedidos.php');
$menu = ObtenerMenuAnidada();
$id = $_GET['id'];
$Platillo = ObtenerUnPlatillo($id);
$TipoGuiso = ObtenerTipoGuiso();
?>
<html>
	<head>
	<!--<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
	--><script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<meta charset=utf-8 />
		<title>Menu Principal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../assets/css/main.css" />
		<link rel="stylesheet" href="../pedidos.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
        function valida(idguiso,idplatillo)
        {
			var costo = document.getElementById(idguiso).value;
			if(costo=="")
			swal ( "Oops" ,  "El Campo esta vacio" ,  "error" );
			else
				sendAjax(idguiso,idplatillo,costo);
				   //alert(idguiso+"-"+idplatillo);
        }
		function sendAjax(idguiso,idplatillo,costo)
    	{
        var dat = "opc=1&PlatilloID="+idplatillo+"&TipoGuisoID="+idguiso+"&Costo="+costo;
        $.ajax({
            url: 'CostosAuxiliar.php',
            type: 'POST',
            data: dat,
        })
        .done(function(){
            swal ( "Success" ,  "Costo Correctamente Asignado" ,  "success" );
			//sendFoto();
        })
        .fail(function(){
            swal ( "Oops" ,  "No se pudo Subir, Intentelo Mas tarde" ,  "error" );
        })
        .always(function(){
            setTimeout(function(){ redireccionar(); }, 1500); 
        });
    	}
        function redireccionar()
        { 
            window.location.reload(false);
        }
        function soloNumeros(e){
            var key = window.Event ? e.which : e.keyCode
            return ((key >= 48 && key <= 57) || (key == 46))
        }
		function regresar()
		{
			window.location = "CostosMain.php";
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
						echo "<ul><a href='".$m['URL']."'>".$m['Menu']."</ul>";
					}
					?>
                <li><a href='../index.php'>Cerrar Sesion</a><li>
			</ul>
			</nav>

		<!-- Main -->
			<div id="main">
			<section class="wrapper style1">
			    <div class="inner">
				<header class="align-center">
                    <h1>Cuanto Cuesta</h1>
					</header>
					<div class="table-wrapper">
                    <table>
                        <tr>
                            <td colspan="3" align="center">
                                <?php echo $Platillo['Platillo']; ?>
                            </td>
                        </tr>
                        <?php
                        foreach($TipoGuiso as $tp)
                        {
                        echo "<tr>";
                            echo "<td align='center'>";
                                echo $tp['TopoGuiso'];
                            echo "</td>"; 
                            echo "<td align='center'>";
                                echo "<input type='text' id='".$tp['TipoGuisoID']."' onKeyPress='return soloNumeros(event)'>";
                            echo "</td>"; 
                            echo "<td align='center'>";
                                echo "<button onclick='valida(".$tp['TipoGuisoID'].",".$id.")'>Guardar</button>";
                            echo "</td>"; 
                        echo "</tr>";
                        }
                    ?>
						<tr>
							<td colspan="3" align="center">
								<button onclick="regresar()">Regresar</button>
							</td>
						</tr>
                    </table>
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