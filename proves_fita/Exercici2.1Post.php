


<h2>Login</h2>
<form method="post">
    <input type="text" name="user" placeholder="usuario">
    <br>
    <input type="password"  name="pass" placeholder="contraseña">
    <br>
    <input type="submit" name="submit" value="Iniciar sesión">
    <input type="hidden" name="formulario_enviado" value="1">
</form>


<?php
if (isset($_POST["formulario_enviado"])) {
    $usuarios_validos = [
        "usuari1" => "contrasenya1",
        "usuari2" => "contrasenya2",
        "usuari3" => "contrasenya3"
    ];
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    
    if (array_key_exists($user, $usuarios_validos) && $usuarios_validos[$user] === $pass) {
        echo "Login correcto!";
    } else {
        echo "Login incorrecto. Por favor, verifica tus credenciales.";
    }
}
?>
