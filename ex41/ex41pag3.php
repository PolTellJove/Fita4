<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <p>ENDEVINA EL NOMBRE</p>
    <?php
        if(!isset($_GET['endevina'])){
    ?>
        <form>
            <label for="">ENDEVINA</label>
            <input type="number" name="endevina">
            <input type="submit">
        </form>
    <?php
        }else{
            if($_SESSION['ocult'] > $_GET['endevina']){
                echo "És més gran";
    ?>
                <form>
                    <label for="">ENDEVINA</label>
                    <input type="number" name="endevina">
                    <input type="submit">
                </form>
    <?php
            }else if($_SESSION['ocult'] < $_GET['endevina']){
                echo "És més petit";
    ?>
                <form>
                    <label for="">ENDEVINA</label>
                    <input type="number" name="endevina">
                    <input type="submit">
                </form>
    <?php
            }else{
                echo "Felicitats, és correcte!<br>";
                echo "<a href='ex41pag1.php'>Torna a l'inici</a>";
            }
        }
    ?>
</body>
</html>