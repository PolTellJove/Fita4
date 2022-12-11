<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <p>ENREGISTRA FRASE 2</p>
    <form action="ex42pag3.php" method="get">
        <input type="text" name="frase2">
        <input type="submit">
    </form>
    <?php
        $_SESSION['frase1'] = $_GET['frase1'];
    ?>
</body>
</html>