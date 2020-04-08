<?php
require('../FuncionesPedidos.php');
$menu = ObtenerMenuAnidada();
$platillos = ObtenerPlatillo();
$Guisos = ObtenerGuisos();
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


					<div class="table-wrapper">
						<!----------------------------------------cero barra aqui o llevar---->
					<div class="scrollHorizontal">
						Para LLevar o para Aqui
                   <table>
                       <tr>
						   <?php
						   
/////////////////////////////////////   para1 = para aqui ,    para2= para llevar
                            echo "<td>";
						   		echo "<div class='4u 12u$(small)'>";
									echo "<input type='radio' id='para1' name='para'>";
									echo "<label for='para1' class='letras'>Para Aqui</label>";
								echo "</div>";
							echo "</td>";
							echo "<td>";
						   		echo "<div class='4u 12u$(small)'>";
									echo "<input type='radio' id='para2' name='para'>";
									echo "<label for='para2' class='letras'>Para Llevar</label>";
								echo "</div>";
							echo "</td>";

						   ?>
                        </tr>
                    </table>  
            		</div>
					<!----------------------------------------------------------------------------------------------------------------------------------->
					
                    <!----------------------------------------primer barra---->
					<div class="scrollHorizontal">
						Plato
                   <table>
                       <tr>
						   <?php
						   
							for($i=1;$i<11;$i++)
							{
                            echo "<td>";
						   		echo "<div class='4u 12u$(small)'>";
									echo "<input type='radio' id='Plato".$i."' name='plato'>";
									echo "<label for='Plato".$i."' class='letras'>".$i."</label>";
								echo "</div>";
							echo "</td>";
						   }
						   ?>
                        </tr>
                    </table>  
            		</div>
					<!----------------------------------------------------------------------------------------------------------------------------------->
					<!----------------------------------------segunda barra platillo---->
					<div class="scrollHorizontal">
						Platillo
                   <table>
                       <tr>
						   <?php
						   
						   foreach($platillos as $platillo)
						   {
                            echo "<td>";
						   		echo "<div class='4u 12u$(small)'>";
									echo "<input type='radio' id='Platillos".$platillo['PlatilloID']."' name='platillo'>";
									echo "<label for='Platillos".$platillo['PlatilloID']."' class='letras'>".$platillo['Platillo']."</label>";
								echo "</div>";
							echo "</td>";
						   }
						   ?>
                        </tr>
                    </table>  
            		</div>
					<!----------------------------------------------------------------------------------------------------------------------------------->
					<!----------------------------------------tercera barra cuantos---->
					<div class="scrollHorizontal">
						Cuantos
                   <table>
                       <tr>
						   <?php
						   
							for($i=1;$i<30;$i++)
							{
                            echo "<td>";
						   		echo "<div class='4u 12u$(small)'>";
									echo "<input type='radio' id='Cuantos".$i."' name='Cuantos'>";
									echo "<label for='Cuantos".$i."' class='letras'>".$i."</label>";
								echo "</div>";
							echo "</td>";
						   }
						   ?>
                        </tr>
                    </table>  
            		</div>
					<!----------------------------------------------------------------------------------------------------------------------------------->
					<!----------------------------------------cuarta barra guiso---->
					<div class="scrollHorizontal">
						Guiso
                   <table>
                       <tr>
						   <?php
						   
						   foreach($Guisos as $Guiso)
                            {
                            echo "<td>";
						   		echo "<div class='4u 12u$(small)'>";
									echo "<input type='radio' id='Guisos".$Guiso['GuisoID']."' name='Guisos'>";
									echo "<label for='Guisos".$Guiso['GuisoID']."' class='letras'>".$Guiso['Guiso']."</label>";
								echo "</div>";
							echo "</td>";
						   }
						   ?>
                        </tr>
                    </table>  
            		</div>
					<!----------------------------------------------------------------------------------------------------------------------------------->
					
				
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
