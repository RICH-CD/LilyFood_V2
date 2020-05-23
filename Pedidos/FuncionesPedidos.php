<?php
function ObtenerCostoConTipoPlatillo($PlatilloID,$TipoGuiso)
{
	try
	{
		$nom;
		require('../../motor/conexion.php');
		$sql = "CALL Pro_Ped_Relacional(3,".$PlatilloID.",".$TipoGuiso.",0,0)";
		foreach($cxn->query($sql) as $row)
		{
			$nom=$row;
	    }
		return $nom;
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ObtenerNoPedido()
{
	try
	{
		$nom;
		require('../../motor/conexion.php');
		$sql = "CALL Pro_Ped_RegresaDatos(2, '', 0, 0, '')";
		foreach($cxn->query($sql) as $row)
		{
			$nom=$row;
	    }
		return $nom["NoPedido"];
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ObtenerLugar($NoPedido)
{
	try
	{
		$nom;
		require('../../motor/conexion.php');
		$sql = "CALL Pro_Ped_RegresaDatos(5, '', ".$NoPedido.", 0, '')";
		foreach($cxn->query($sql) as $row)
		{
			$nom=$row;
	    }
		return $nom["Lugar"];
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ObtenerPedidosActivos()
{
	try
	{
		$nom=array();
		require('../../motor/conexion.php');
		$sql = "CALL Pro_Ped_RegresaDatos(3, '', 0, 0, '')";
		foreach($cxn->query($sql) as $row)
		{
			$nom[]=$row;
	    }
		return $nom;
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ObtenerDesglosePedido($pedido)
{
	try
	{
		$nom=array();
		require('../../motor/conexion.php');
		$sql = "CALL Pro_Ped_RegresaDatos(4, '', ".$pedido.", 0, '')";
		foreach($cxn->query($sql) as $row)
		{
			$nom[]=$row;
	    }
		return $nom;
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ObtenerPlatilloRelacional($PlatilloID)
{
	try
	{
		$nom=array();
		require('../../motor/conexion.php');
		$sql = "CALL Pro_Ped_Relacional(2,".$PlatilloID.",0,0,0)";
		foreach($cxn->query($sql) as $row)
		{
			$nom[]=$row;
	    }
		return $nom;
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function AgregarPedRelacional($PlatilloID,$TipoGuisoID,$Costo)
{
    try{
		require('../../motor/conexion.php');
		$pst = $cxn->prepare("CALL Pro_Ped_Relacional(1,".$PlatilloID.",".$TipoGuisoID.",".$Costo.",0)");
		$pst->execute();
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function eliminaPlatillo($PlatilloID)
{
    try{
		require('../../motor/conexion.php');
		$pst = $cxn->prepare("CALL Pro_Ped_RegresaDatos(6,'',".$PlatilloID.",0,'')");
		$pst->execute();
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function AgregarPedido($pedido,$lugar,$plato,$platillo,$Cuantos,$Guisos)
{
	try{
		require('../../motor/conexion.php');
		$pst = $cxn->prepare("CALL Pro_Ped_Pedidos(1,".$pedido.", ".$platillo.", ".$Guisos.", ".$lugar.", ".$plato.", ".$Cuantos.", 0, 0)");
		$pst->execute();
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function FinalizarPedido($pedido)
{
	try{
		require('../../motor/conexion.php');
		$pst = $cxn->prepare("CALL Pro_Ped_Pedidos(2,".$pedido.", 0, 0, 0, 0, 0, 0, 0)");
		$pst->execute();
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ObtenerUnPlatillo($PlatilloID)
{
    try{
		$nom;
		require('../../motor/conexion.php');
		$sql = "CALL Pro_Ped_RegresaDatos(1, '', ".$PlatilloID.", 0, '')";
		foreach($cxn->query($sql) as $row)
		{
			$nom=$row;
	    }
		return $nom;
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function EliminarGuiso($Guiso,$id)
{
    try{
		require('../../motor/conexion.php');
		$pst = $cxn->prepare("CALL Pro_Ped_Guisos(3,'".$Guiso."',".$id.",0)");
		$pst->execute();
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ModificarGuiso($Guiso,$id,$tipo)
{
    try{
		require('../../motor/conexion.php');
		$pst = $cxn->prepare("CALL Pro_Ped_Guisos(2,'".$Guiso."',".$id.",".$tipo.")");
		$pst->execute();
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function AgregarGuiso($Guiso,$TipoGuiso)
{
    try{
		require('../../motor/conexion.php');
		$pst = $cxn->prepare("CALL Pro_Ped_Guisos(1,'".$Guiso."',".$TipoGuiso.",0)");
		$pst->execute();
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ObtenerTipoGuiso()
{
    try{
		$nom=array();
		require('../../motor/conexion.php');
		$sql = "CALL Pro_Ped_RegresaDatos(0, '', 0, 0, '')";
		foreach($cxn->query($sql) as $row)
		{
			$nom[]=$row;
	    }
		return $nom;
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ObtenerMenu()
{
    try{
		$nom=array();
		require('../motor/conexion.php');
		$sql = "CALL Pro_Adm_RegresaDatos(0, 0, '', 0, '')";
		foreach($cxn->query($sql) as $row)
		{
			$nom[]=$row;
	    }
		return $nom;
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ObtenerMenuAnidada()
{
    try{
		$nom=array();
		require('../../motor/conexion.php');
		$sql = "CALL Pro_Adm_RegresaDatos(0, 0, '', 0, '')";
		foreach($cxn->query($sql) as $row)
		{
			$nom[]=$row;
	    }
		return $nom;
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ObtenerGuisos()
{
    try{
		$nom=array();
		require('../../motor/conexion.php');
		$sql = "CALL Pro_Ped_Guisos(0,'',0,0)";
		foreach($cxn->query($sql) as $row)
		{
			$nom[]=$row;
	    }
		return $nom;
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ObtenerPlatillo()
{
    try{
		$nom=array();
		require('../../motor/conexion.php');
		$sql = "CALL Pro_Ped_Platillos(0,'',0)";
		foreach($cxn->query($sql) as $row)
		{
			$nom[]=$row;
	    }
		return $nom;
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function AgregarPlatillo($platillo)
{
    try{
		require('../../motor/conexion.php');
		$pst = $cxn->prepare("CALL Pro_Ped_Platillos(1,'".$platillo."',0)");
		$pst->execute();
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ModificarPlatillo($platillo,$id)
{
    try{
		require('../../motor/conexion.php');
		$pst = $cxn->prepare("CALL Pro_Ped_Platillos(2,'".$platillo."',".$id.")");
		$pst->execute();
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function EliminarPlatillo($platillo,$id)
{
    try{
		require('../../motor/conexion.php');
		$pst = $cxn->prepare("CALL Pro_Ped_Platillos(3,'".$platillo."',".$id.")");
		$pst->execute();
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
function ObtenerLink($empleado,$solicitud)
{
	try{
		$nom="";
		require('../motor/conexion.php');
		$sql = "CALL Pro_Sis_RecuperarSolicitudes(7,".$empleado.",".$solicitud.")";
		foreach($cxn->query($sql) as $row)
		{
			$nom=$row;
	    }
		return $nom;
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}	

function TerminaSolicitud($empleado,$solicitud)
{
	try{
		$opc = 6;
		require('../motor/conexion.php');
		$pst = $cxn->prepare("CALL `Pro_Sis_RecuperarSolicitudes`(?,?,?)");
		$pst->execute([$opc,$empleado,$solicitud]);
	}catch(PDOException $e){
		print "Error! ".$e->getMessage()."<br>";
		die();
	}
}
?>