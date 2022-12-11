<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <p>COINCIDÈNCIES</p>
    <a href="ex42pag1.php">Pàgina 1</a>
    <br>
    <?php
        $incoincidencia = true;
        $listaFrase1 = explode(" ",$_SESSION['frase1']);
        $listaFrase2 = explode(" ",$_GET['frase2']);
        foreach($listaFrase1 as $paraula){
            if(in_array($paraula,$listaFrase2)){
                echo "La paraula <strong>$paraula</strong> està a les dues frases<br>";
                $incoincidencia = false;
            }
        }
        if($incoincidencia){
            echo "No hi ha cap coincidència.";
        }
    ?>
</body>
</html>