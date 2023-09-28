<!DOCTYPE html>
<html>
<head>
    <title>Comanda</title>
</head>
<body>
    <?php
    if (isset($_GET["comanda"])) {
        $comanda = $_GET["comanda"];
        echo "<h1>Iniciar Comanda $comanda</h1>";
    } else {
        echo "<p>No s'ha proporcionat una comanda vàlida.</p>";
    }
    ?>
</body>
</html>
