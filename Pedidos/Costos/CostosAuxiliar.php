<?php
require('../FuncionesPedidos.php');
$PlatilloID = $_POST['PlatilloID'];
$opc=$_POST['opc'];
$TipoGuisoID = $_POST['TipoGuisoID'];
$Costo = $_POST['Costo'];
if($opc==1)
{
    AgregarPedRelacional($PlatilloID,$TipoGuisoID,$Costo);
}
elseif($opc==2)
{
    /*$tipo = $_POST['TipoGuiso'];
    $id = $_POST['id'];
    ModificarGuiso($Guiso,$id,$tipo);*/
}
elseif($opc==3)
{
    /*$id = $_POST['id'];
    EliminarGuiso($Guiso,$id);*/
}
?>