<?php
require('../FuncionesPedidos.php');
$Guiso = $_POST['Guiso'];
$opc=$_POST['opc'];
if($opc==1)
{
    $tg = $_POST['TipoGuiso'];
    AgregarGuiso($Guiso,$tg);
}
elseif($opc==2)
{
    $tipo = $_POST['TipoGuiso'];
    $id = $_POST['id'];
    ModificarGuiso($Guiso,$id,$tipo);
}
elseif($opc==3)
{
    $id = $_POST['id'];
    EliminarGuiso($Guiso,$id);
}
?>