<!DOCTYPE html>
<html>
<head>
    <title>Digitaler - 2 - servicio </title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8" />
</head>
<body>
    <?php
        $email = $_POST["email"];
        $fechanac = $_POST["fechanac"];    
        $calle = $_POST["calle"];
        $altura = $_POST["altura"];
        $telefono = $_POST["telefono"];
        $cuenta = $_POST["cuenta"];
        $terminos = $_POST["terminos"];
    ?>
    <table>
        <tr>
            <td> Email </td>
            <td>Telefono </td>
        </tr>
        <tr>
            <td> <?php echo $email ?> </td>
            <td> <?php echo $telefono ?> </td>
        </tr>
    </table>
</body>
</html>
