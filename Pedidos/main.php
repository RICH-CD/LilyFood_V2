<?php
require('FuncionesSolicitudes.php');
require('../motor/funcioneslogin.php');
$user = $_GET['u'];
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
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="pedidos.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
		</script>
</head>
	<body class="subpage">
	<!-- Header -->
	<header id="header">
		<div class="logo"><a href="../inicioRM.php">RM <span>Mantenimiento</span></a>
        </div>
			<a href="#menu">Menu</a>
	</header>

		<!-- Nav -->
		<nav id="menu">
			<ul class="links">
			<?php 
				foreach( $nom as $row ) 
				{	
					if($row['ModuloID']==2)
					{					
						echo "<li><a href='#name'>" .$row["Modulo"]. "</a></li>";					    
						foreach( $sm as $row2 ) {					        
					    	if($row2["ModuloID"]==$row["ModuloID"]&&$row2["URL"]!=""){
									echo "<ul><a href='../".$row2["URL"]."'>" .$row2["Submodulo"]. "</a></ul>";
							}
						}
					}
				}
			?>
				<li><a href='../closesesion.php'><br>Cerrar Sesion</a><li>
			</ul>
			</nav>

		<!-- Main -->
			<div id="main">
			<section class="wrapper style1">
			    <div class="inner">
				<header class="align-center">
                    <h1>Solicitudes Terminadas</h1>
					<p>Administracion y gestion de solicitudes.</p>
					</header>

					<div class="table-wrapper">
						<table class="tamano">
                        <thead>
							<tr style="height:50%;">
								<td>
									No Orden.
								</td>
								<td>
									Tipo de Servicio
								</td>
								<td>
									Especialidad
								</td>
							</tr>
						</thead>
                        <tbody>
						<?php
							foreach($solicitud as $sol)
							{
                                if($sol['EstatusID']>5&&$sol['EstatusID']<7)
								{
						?>
                                    <tr onclick="document.location='subirUltimaIMG.php?sol=<?php echo $sol['SolicitudID']; ?>&us=<?php echo $user; ?>'">
                                    <?php
										echo "<td valign='center'>";
										if($sol['EstatusID']==4)
											echo "<img src='../images/new.png' width='10%' height='auto'>";
										echo $sol['NoOrden'];
										echo "</td>";
										echo "<td valign='top'>".$sol['TipoServicio']."</td>";
                                        echo "<td valign='top'>".$sol['Especialidad']."</td>";
                                        echo "</tr>";
                                }
                            }
                                    ?>
                        </tbody>
                        </table>
					</div>
			    </div>
					</section>
			</div>
<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
				</body>
	
</html>
</html>
