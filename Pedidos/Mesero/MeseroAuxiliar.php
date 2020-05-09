<?php
require('../FuncionesPedidos.php');
$op = $_POST['op'];
if($op==1)
{
    //opcion para insertar
    $pedido = $_POST['pedido'];
    $lugar = $_POST['lugar'];
    $plato = $_POST['plato'];
    $platillo = $_POST['platillo'];
    $Cuantos = $_POST['Cuantos'];
    $Guisos = $_POST['Guisos'];
    AgregarPedido($pedido,$lugar,$plato,$platillo,$Cuantos,$Guisos);
}
?>