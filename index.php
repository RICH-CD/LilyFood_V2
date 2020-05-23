<html>
	<head>
	<!--<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
	--><script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<meta charset=utf-8 />
		<title>Inicio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
			header("Location: Pedidos/main.php")
			/*
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
				}*/
			?>

			</ul>
			</nav>

		<!-- Main -->
		<div id="main">
			<section class="wrapper style1">
			    <div class="inner">
			        <header class="align-center">
                        <center><h1>Quien eres?</h1></center>
				    </header>

					<div class="table-wrapper">
						<table>
						<tr onclick="window.location = 'Pedidos/main.php?u=1'">
                            <td align="center">Ricardo<td>
                        </tr>
                        <tr onclick="window.location = 'Pedidos/main.php?u=2'">
                            <td align="center">Oswaldo<td>
                        </tr>
                        <tr onclick="window.location = 'Pedidos/main.php?u=3'">
                            <td align="center">Lily<td>
                        </tr>
                        <tr onclick="window.location = 'Pedidos/main.php?u=4'">
                            <td align="center">Rich<td>
                        </tr>
                        <tr onclick="window.location = 'Pedidos/main.php?u=5'">
                            <td align="center">Yuli<td>
                        </tr>
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
