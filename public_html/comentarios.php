<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sección de comentarios - Mudeitor">
    <meta name="author" content="Conde Studios">
    <title>Mudeitor | Comentarios</title>
    <link  rel="icon" href="favic3.png" type="image/png">
    
    <link rel="stylesheet" href="assets/css/comentarios.css">
</head>

<body>
    
    <div class="caja">
        <form action="comentarios.php" class="formulario" method="POST">
            <div class="fila">
                <div class="entrada">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                </div>
                <div class="entrada">
                    <label for="mail">Correo electrónico</label>
                    <input type="text" id="mail" name="mail" placeholder="Ingrese su correo electrónico" required>
                </div>
            </div>
            <div class="entrada texto">
                <label for="comentario">Comentario</label>
                <textarea id="comentario" name="comentario" placeholder="Ingrese su comentario" required></textarea>
            </div>
            <div>
            <input type="submit" class="btn" name="boton" value="Enviar">
            </div>
        </form>
        <div class="previos">
            <?php
            require('conexion.php');

               $a =  $conn->query("SELECT * FROM comentarios");
               while( $b = $a->fetch_assoc()){
                   $nombre = $b['nombre'];
                   $mail = $b['mail'];
                   $comentario = $b['comentario'];

                   echo "<div class='elemento'><h4>" . $nombre . "</h4><a href=mailto:'" . $mail . "'>" . $mail . "</a><p>" . $comentario . "</p></div>";
               }
            ?>
        </div>
    </div>
</body>
</html>


<?php
    require('conexion.php');

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $mail = $_POST['mail'];
        $comentario = $_POST['comentario'];
        $boton = $_POST['boton'];
    
        if($boton){
            if($nombre && $comentario){
                $sql = "INSERT INTO comentarios (nombre, mail, comentario) VALUES ('$nombre', '$mail', '$comentario')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>window.location.href='comentarios.php';</script>";
                    exit;
              }
              else {
                die("<script>alert('Ocurrió un error inesperado, intente nuevamente.')</script>");
            }
        }
        else{
            die("<script>alert('Ocurrió un error inesperado, intente nuevamente.')</script>");
        }
    }
}

?>