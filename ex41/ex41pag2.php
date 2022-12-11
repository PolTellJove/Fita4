<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <p>NOMBRE ENREGISTRAT</p>
    <?php
        $_SESSION['ocult'] = $_POST['ocult'];
    ?>
    <a href="ex41pag3.php">Endevinar</a>
</body>
</html>