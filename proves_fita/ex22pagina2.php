<!DOCTYPE html>
<html>
<head>
    <title>Generar Links</title>
</head>
<body>
    <?php
    if (isset($_POST["quantitat"])) {
        $quantitat = $_POST["quantitat"];
        echo "<h1>Links:</h1>";
        for ($i = 1; $i <= $quantitat; $i++) {
            echo "<a href='ex22pagina3.php?comanda=$i'>Comanda $i</a><br>";
        }
    } else {
        echo "<p>Cal introduir una quantitat.</p>";
    }
    ?>
</body>
</html>
