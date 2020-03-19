<?php
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