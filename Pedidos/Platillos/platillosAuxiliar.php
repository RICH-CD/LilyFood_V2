<?php
require('../FuncionesPedidos.php');
$platillo = $_POST['platillo'];
$opc=$_POST['opc'];
if($opc==1)
{
    AgregarPlatillo($platillo);
}
elseif($opc==2)
{
    $id = $_POST['id'];
    ModificarPlatillo($platillo,$id);
}
elseif($opc==3)
{
    $id = $_POST['id'];
    EliminarPlatillo($platillo,$id);
}
?>