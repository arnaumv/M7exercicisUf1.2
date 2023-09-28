<!DOCTYPE html>
<html>
<head>
    <title>Selector de Skins</title>
</head>
<body>
    <h1>Selector de Skins</h1>
    <form method="POST">
        <label>Selecciona un color:</label>
        <select name="color">
            <option value="FOC">FOC</option>
            <option value="AIGUA">AIGUA</option>
            <option value="TERRA">TERRA</option>
        </select>
        <input type="submit" name="submit" value="Cambiar Color">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        if (isset($_POST["color"])) {
            $color = $_POST["color"];
            $color_fondo = "";

            // Asignar el color de fondo según la opción seleccionada
            switch ($color) {
                case "FOC":
                    $color_fondo = "red";
                    break;
                case "AIGUA":
                    $color_fondo = "blue";
                    break;
                case "TERRA":
                    $color_fondo = "green";
                    break;
                default:
                    $color_fondo = "white"; // Color predeterminado
                    break;
            }

            echo "<style>body { background-color: $color_fondo; }</style>";
        }
    }
    ?>
</body>
</html>
