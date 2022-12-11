<?php
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="ex44pag1.php" method="post">
        <textarea name="text" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        array_push($_SESSION['llistaText'],$_POST['text']);
        foreach($_SESSION['llistaText'] as $text){
            echo $text."<br><br>";
        }
    ?>
</body>
</html>