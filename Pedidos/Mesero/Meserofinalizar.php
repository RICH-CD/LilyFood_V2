<?php
require('../FuncionesPedidos.php');
FinalizarPedido($_GET['pedido']);
header("Location: MeseroPedidos.php");
?>