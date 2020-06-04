<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    error_reporting(0);
    if ($_REQUEST['clear']){
        $val_NAME="";
        $val_ADDRESS="";
        $result="";
    }
    if ($_REQUEST['submit']){
        $NOMBRE = $_REQUEST['val_NAME'];
        $DIRECCION = $_REQUEST['val_ADDRESS'];
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pizzería los inmigrantes</title>
    </head>
    <body>
        
        <header><img src="images/pizza5400x2342.jpg" width=100%>
       </header>
        <h1>Pizzeria los Inmigrantes</h1>
        <p>
        <form name="form" method="past" action="">
            <p>Ingrese su nombre <input type="text" name="val_NAME" value="<?php echo $val_NAME; ?>"></p>
            <p>Ingrese su dirección <input type="text" name="val_ADDRESS" value="<?PHP echo $val_ADDRESS; ?>"></p>
            
            <input type="submit" name="submit" value="Ingresar">
            <input type="submit" name="clear" value="Clear">
        </form>
            
            
        </p>

    </body>
</html>
