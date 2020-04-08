<?php
require('../FuncionesPedidos.php');
$menu = ObtenerMenuAnidada();
$platillos = ObtenerPlatillo();
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
        function asignar(span)
        {
            var id = span.id;
			window.location = 'CostosAsignar.php?id='+id;
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
                    <h1>Costos</h1>
					</header>

					<div class="table-wrapper">
                    <table>
                            <?php
                                foreach($platillos as $platillo)
                                {
                                    echo "<tr><td colspan='2' align='center'>";
                                    echo "<span id='".$platillo['PlatilloID']."' onclick='asignar(this)'>".$platillo['Platillo']."</span>";
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