<?php
try{
		$cxn = new PDO('mysql:host=localhost;dbname=lilyfood', 'root', 'minimo01');
}catch(PDOException $e){
print "Error! ".$e->getMessage()."<br>";
die();
}
?>
