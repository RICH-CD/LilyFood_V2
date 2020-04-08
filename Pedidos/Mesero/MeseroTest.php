<?php
require('../FuncionesPedidos.php');
$menu = ObtenerMenuAnidada();
?>
<!DOCTYPE html>
<html lang="en">
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pedidos.css" />
    <link rel="stylesheet" href="../mesero.css" />
    <title>Agregar Pedido</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
	</script>
</head>
<body>
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
						echo "<ul><a href='../Mesero/".$m['URL']."'>".$m['Menu']."</ul>";
					}
					?>
				<li><a href='../../index.php'><br>Cerrar Sesion</a><li>
			</ul>
			</nav>
            <!---------------------------------------------------------------------------------------------------->
<div class="scrollHorizontal">
                   <table>
                       <tr>
                           <td>
                           <form name="frmSO">
                            <input type="radio" name="so" value="windows">Windows
                            <input type="radio" name="so" value="linux">Linux
                            <input type="radio" name="so" value="osx">OSX
                            <input type="radio" name="so" value="other">Other
                            </form>
                            </td>
                        </tr>
                    </table>  
            </div>
</body>
</html>