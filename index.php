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
        <meta http-equiv="refresh" content="1" \>
        <link rel=stylesheet href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">

        <title>Pizzería los inmigrantes</title>
        
    </head>
    <body>
        
        <header><img src="images/pizza1000x200.jpg" width=100%></header>
        <h1>Pizzeria los Inmigrantes</h1>
        <h2>Registrarse</h2>
        <table border="0">
            <form name="form" method="past" action="">
                <tr>
                    <td>
                        Ingrese su nombre
                    </td>
                    <td>
                        <input type="text" name="val_NAME" value="<?php echo $val_NAME; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Ingrese su dirección
                    </td>
                    <td>
                        <input type="text" name="val_ADDRESS" value="<?PHP echo $val_ADDRESS; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Ingrese su rut
                    </td>
                    <td>
                        <input type="text" name="val_RUT" value="<?PHP echo $val_RUT; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Ingrese su contraseña
                    </td>
                    <td>
                        <input type="text" name="val_PASS" value="<?PHP echo $val_PASS; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Ingrese su contraseña nuevamente
                    </td>
                    <td>
                        <input type="text" name="val_PASS2" value="<?PHP echo $val_PASS; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="submit" value="Ingresar">
                        <input type="submit" name="clear" value="Clear">
                        
                    </td>
                </tr>
            </form>
        </table>
    </body>
</html>
