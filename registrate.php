<?php
  require "database.php";

  $message = "";

  if(!empty($_POST["email"]) && !empty($_POST["user"]) && !empty($_POST["password"])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email,:password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email",$_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $stmt->bindParam(":password",$password);

    if($stmt->execute()) {
        $message = "Se a creado su cuenta con éxito!";
    } else {
        $message = "Lo siento a ocurrido un error al crear su cuenta";
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
      <link rel="stylesheet" href="registrate.css">
    </head>
<body>
<header>
    <div class="container">
    <div class="container-box">  
    <a href="index.php" class="title" style=""><b>H</b>emofilia <b class="color-letter">A</b>rgentina <span>(IDHserver)</span></a>
        <nav>
           <a href="index.php" style="">Inicio</a>
           <a href="micuenta.php" style="">Mi Cuenta</a>
           <a href="registrate.php" style="">Regístrate</a>
       </nav>
    </div>
  </div>

        <?php if(!empty($message)): ?>
         <p><?= $message ?></p>
        <?php endif; ?>
        
    <div class="contact-borders">
        <div class="contact-borders__data">
     <h1 class="title-page">Crear cuenta</h1>
     <span class="move-o">o <a href="micuenta.php"><b class="index-color">Inicia Sesión</b></a></span>
        </div>
            <p>Completa los siguientes datos:</p>
          <form action="registrate.php" method="post">
            <input type="email" class="form-control" name="email" placeholder="Escribe tu email" required>
            <input type="text" class="form-control" name="user" placeholder="Nombre de usuario" maxlength="10" required>
            <input type="password" class="form-control" name="password" placeholder="Inserte contraseña" maxlength="10" required>
            <input type="repassword" class="form-control" name="Repassword" placeholder="Repita la contraseña" max="10">
        <br>
    <div class="checkbox">
        <label>
            <input name="t3" value="1" type="checkbox" required>
            Acepto la responsabilidad de mantener segura mi cuenta de <b>email</b> para así tener resguardado mi usuario .
        </label>
    <div class="panel-group">
            <input type="submit" value="Enviar!" namespace="Crear cuenta!">
        </form>   
    </div>
        </div>
        </header>
</body>
</html>