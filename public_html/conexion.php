<?php
    $servidor = "localhost";
    $usuario = "id19763567_mudeitor";
    $contraseña = "xt?9{oLs/[r-_smN";
    $base = "id19763567_comentarios_database";

    $conn = new mysqli($servidor, $usuario, $contraseña, $base);

    if (!$conn){
        die("<script>alert('La conexión falló.')</script>");
}
?>