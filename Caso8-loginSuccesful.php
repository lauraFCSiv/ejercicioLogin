<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo Ámbito de variables</title>
</head>
<body>
    <div>
        <?php
            session_start();
            echo "BIENVENIDA ".$_SESSION['usuario'];
        ?>
    </div>
</body>
</html>
