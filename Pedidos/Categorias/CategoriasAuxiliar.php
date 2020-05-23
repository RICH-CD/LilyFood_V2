<?php
require('../FuncionesPedidos.php');
$opc=$_POST['opc'];
$Categoria = $_POST['Categoria'];
if($opc==1)
{
    AgregarCategoria($Categoria);
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
    EliminarCategoria($id);
}
?>