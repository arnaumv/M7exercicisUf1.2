<?php
// Diccionari de noms d'usuari i contrasenyes vàlids
$diccionari = array(
    "usuari1" => "contrasenya1",
    "usuari2" => "contrasenya2",
    "usuari3" => "contrasenya3"
);

$usuari = isset($_GET["user"]) ? $_GET["user"] : "";
$contrasenya = isset($_GET["pass"]) ? $_GET["pass"] : "";

if (!empty($usuari) && !empty($contrasenya)) {
    // Verificar si l'usuari i la contrasenya coincideixen amb els valors del diccionari
    if (array_key_exists($usuari, $diccionari) && $diccionari[$usuari] === $contrasenya) {
        echo "Login correcte!";
    } else {
        echo "Login incorrecte. L'usuari o la contrasenya són incorrectes.";
    }
}
?>

<h2>Login</h2>
<form method="GET">
    <input type="text" name="user" placeholder="Usuari">
    <br>
    <input type="password" name="pass" placeholder="Contrasenya">
    <br>
    <input type="submit" value="Iniciar sessió">
</form>
