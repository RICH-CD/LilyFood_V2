<?php
require('../FuncionesPedidos.php');
$Guiso = $_POST['Guiso'];
$opc=$_POST['opc'];
if($opc==1)
{
    AgregarGuiso($Guiso);
}
elseif($opc==2)
{
    $id = $_POST['id'];
    ModificarGuiso($Guiso,$id);
}
elseif($opc==3)
{
    $id = $_POST['id'];
    EliminarGuiso($Guiso,$id);
}
?>