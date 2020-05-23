<?php
require('../FuncionesPedidos.php');
$Categorias = ObtenerCategorias();
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
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script src="sweetalert2.all.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
        var id;
        function asignar(span)
        {
            id = span.id;
            var plato = span.innerHTML;
			const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger'
			},
			buttonsStyling: false
			})

			swalWithBootstrapButtons.fire({
			title: 'Esta Seguro?',
			text: plato+" sera eliminado permanentemente!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Si, borralo!',
			cancelButtonText: 'No, cancela!',
			reverseButtons: true
			}).then((result) => {
			if (result.value) {
				sendAjax(id,plato);
				swalWithBootstrapButtons.fire(
				'Eliminado!',
				plato+' ha sido eliminado.',
				'success'
				)
			} else if (
				/* Read more about handling dismissals below */
				result.dismiss === Swal.DismissReason.cancel
			) {
				swalWithBootstrapButtons.fire(
				'Cancelado',
				plato+' esta seguro:)',
				'error'
				)
			}
			})
			
			
			
			//if(confirm("Desea eliminar "+plato))
            	
        }
		function test()
		{
			
		}
        function valida()
		{
			if(document.getElementById("Categoria").value=="")
				swal('Warning!','Ingrese Categoria','warning');
			else
				sendAjax()
		}
        function sendAjax(id,Categoria)
    	{
       
        var dat = "opc=3&Categoria="+Categoria+"&id="+id;
        $.ajax({
            url: 'CategoriasAuxiliar.php',
            type: 'POST',
            data: dat,
        })
        .done(function(){
            //swal ( "Success" ,  "Categoria Correctamente Eliminado" ,  "success" );
			//sendFoto();
        })
        .fail(function(){
            swal ( "Oops" ,  "No se pudo Eliminar, Intentelo Mas tarde" ,  "error" );
        })
        .always(function(){
            setTimeout(function(){ redireccionar(); }, 2000); 
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
						echo "<ul><a href='../".$m['URL']."'>".$m['Menu']."</ul>";
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
                    <h1>Categorias</h1>
					</header>

					<div class="table-wrapper">
						<table class="tamano">
                        <thead>
							<tr style="height:50%;">
								<td align="center" colspan="2">
									Eliminar Categoria
								</td>
							</tr>
						</thead>
                        </table>
                        <br><br>
                        <table>
                            <?php
                                foreach($Categorias as $Categoria)
                                {
                                    echo "<tr><td colspan='2' align='center'>";
									echo "<span id='".$Categoria['TipoGuisoID']."' ondblclick='asignar(this)'>".$Categoria['TopoGuiso']."</span>";
									//echo "<button onclick='test()'>Test</button>";
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
