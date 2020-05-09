<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--<form name="frmSO">-->
<input type="radio" name="so" value="windows">Windows
<input type="radio" name="so" value="linux">Linux
<input type="radio" name="so" value="osx">OSX
<input type="radio" name="so" value="other">Other
<!--</form>-->
<?php
require('../FuncionesPedidos.php');
echo ObtenerNoPedido();
?>
</body>
</html>