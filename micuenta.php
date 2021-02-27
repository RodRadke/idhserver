<?php

    session_start();

    require "database.php";

    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $records = $conn->prepare("SELECT id, email, password FROM users WHERE email=:email");
        $records->bindParam(":email", $_POST["email"]);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = "";
        
        if (count($results) > 0 && password_verify($_POST["password"], $results["password"])){
            $_SESSION["user_id"] = $results ["id"];
            header("Location: index.php");
        } else {
            $message = "Lo siento, estas credenciales no coinciden";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Hemofilia Argentina</title>
      <meta charset="UTF-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="keywords" content="Hemofilia, Hemofilia A, Hemofilia B severa, Hematología, Fundación de la hemofilia, pacientes con hemofilia, resumen, historia clínica, patología">
      <meta name="description" content="Página y servidor para pacientes con Hemofilia y sus familiares para facilitar el control y visualización de historial clínico del paciente, desarrollado por Chavez Rodrigo.">
      <meta name="author" content="Rodrigo Sebastián Chavez Developer">
      <meta name="copyright" content="Rod S.A.">
      <meta name="robots" content="noindex">
      <meta name="robots" content="nofollows">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="Normalize/normalize.css">
      <link rel="shortcut icon" href="Iconoseimg/himg.jpg" type="image/x-icon">
      <link rel="stylesheet" href="micuenta.css">
    </head>
    <body>
        <header>
            <a href="index.php" style="">Hemofilia Argentina</a></li>
        <h1>Iniciar Sesión</h1>
        <span>o <a href="registrate.php"><b>Regístrate</b></a></span>

    <?php if (!empty($message)) : ?>
        <p><?= $message ?></p>
    <?php endif;?>   

        <form action="micuenta.php" method="post">
            <input type="text" name="email" placeholder="Ingresar Email">
            <input type="password" name="password" placeholder="Ingresa tu contraseña">
            <input type="submit" value="Send">
        </header>
        </form>
    </body>
</html>