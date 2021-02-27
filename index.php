<?php 
  session_start();
  
  require "database.php";
  
  if (isset($_SESSION["user_id"])) {
    $records = $conn-> prepare("SELECT id, email, password FROM users WHERE id = :id");
    $records-> bindParam(":id", $_SESSION["user_id"]);
    $records-> execute();
    $results = $records -> fetch(PDO::FETCH_ASSOC);

    $user = null;
    
    if (count($results) > 0) {
      $user = $results;
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
      <link rel="stylesheet" href="index.css">
    </head>
<body>
    <header>
      <div class="nav-position">
        <nav>
           <a href="index.php" class="title" style="">Hemofilia Argentina</a>
           <a href="index.php" style="">Inicio</a>
           <a href="micuenta.php" style="">Mi Cuenta</a>
           <a href="registrate.php" style="">Regístrate</a>
           <hr>
       </nav>
       </div>

      <?php if(!empty($user)): ?>
        <br>Welcome <?= $user["email"] ?>
        <br> Has ingresado!
        <a href="logout.php">Cerrar sesión</a>
        <?php else: ?>


      <div class="background-container">
        <div class="notice-panel">
            <h1>Bienvenido al servidor de IDH y base de datos para pacientes con Hemofilia</h1>
            <h2><i>En esta página usted podrá crear su IDH (Identificación como paciente de Hemofilia) donde podrá portar y descargar su identificación como paciente con su tipo de Hemofilia junto a su certificado diagnóstico y consejos en caso de emergencia y número a la Fundación de la Hemofilia. </i></h2>
            <h2>Un servidor dedicado a todos los pacientes con Hemofilia del país!</h2>
    </header>
  </div>
</div>
<div>
<h2>Prueba de guardado de archivo repositorio para cambio</h2>
</div>
<?php endif; ?>
</body>
</html>