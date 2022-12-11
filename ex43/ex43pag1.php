<?php
    session_start();
    if(!isset($_SESSION['conjuntDeLletres'])){
        $_SESSION['conjuntDeLletres']="";
    }
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        echo "<form action='ex43pag1.php' method='get'>";
        $llista='QWERTYUIOPASDFGHJKLZXCVBNM';
        for($i=0; $i<strlen($llista); $i++){
            echo "<input type='submit' value='$llista[$i]' name='$llista[$i]'>";
        }
        echo "</form>";
        $lletraFinal="";
        foreach($_GET as $lletra){
            $lletraFinal=$lletra;
        }
        $_SESSION['conjuntDeLletres'].=$_GET[$lletraFinal] ;
        echo $_SESSION['conjuntDeLletres'];
    ?>
</body>
</html>