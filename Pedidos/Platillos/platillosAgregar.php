<?php
require('../FuncionesPedidos.php');
$platillos = ObtenerPlatillo();
$menu = ObtenerMenuAnidada();
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
        function valida()
		{
			if(document.getElementById("platillo").value=="")
				swal('Warning!','Ingrese Platillo','warning');
			else
				sendAjax()
		}
        function sendAjax()
    	{
        var platillo =document.getElementById("platillo").value;
        var dat = "opc=1&platillo="+platillo;
        $.ajax({
            url: 'platillosAuxiliar.php',
            type: 'POST',
            data: dat,
        })
        .done(function(){
            swal ( "Success" ,  "Platillo Correctamente Agregada" ,  "success" );
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
                <li><a href='../../index.php'>Cerrar Sesion</a><li>
			</ul>
			</nav>

		<!-- Main -->
			<div id="main">
			<section class="wrapper style1">
			    <div class="inner">
				<header class="align-center">
                    <h1>Platillos</h1>
					</header>

					<div class="table-wrapper">
						<table class="tamano">
                        <thead>
							<tr style="height:50%;">
								<td align="center" colspan="2">
									Agrege Platillo
								</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align="center">
									Platillo
								</td>
                                <td align="center">
									<input type="text" id="platillo">
								</td>
                                
							</tr>
                            <tr>
                                <td align="center" colspan="2">
									<button onclick="valida();">Agregar</button>
								</td>
                            </tr>
						</tbody>
                        </table>
                        <br><br>
                        <table>
                            <?php
                                foreach($platillos as $platillo)
                                {
                                    echo "<tr><td colspan='2' align='center'>";
                                    echo $platillo['Platillo'];
                                    echo "</td></tr>";
                                }
                            ?>
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
</html>
