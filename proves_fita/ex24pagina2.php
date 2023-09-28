
<html>
<head>
    <title>Comprovació </title>
</head>
<body>
    <h1>Comprovació </h1>


    <?php
    if (isset($_POST["contrasenya1"]) && isset($_POST["contrasenya2"])) 
    
    {
        $contrasenya1 = $_POST["contrasenya1"];
        $contrasenya2 = $_POST["contrasenya2"];

        if ($contrasenya1 === $contrasenya2) {
            if (preg_match('/[0-9]/', $contrasenya1)) {
                echo "Contrasenya correcta";

            } else {
                echo "ERROR: La contrasenya ha de tenir almenys un numero";
            }
        } else {
            echo "ERROR: Les contrasenyes no coincideixen";
        }
    } 
    ?>
</body>
</html>
