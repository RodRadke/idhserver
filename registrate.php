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
    <div class="nav-position">
        <nav>
           <a href="index.php" class="title" style="">Hemofilia Argentina</a>
           <a href="index.php" style="">Inicio</a>
           <a href="micuenta.php" style="">Mi Cuenta</a>
           <a href="registrate.php" style="">Regístrate</a>
           <hr>
       </nav>
       </div>
    <div class="background-container">  
     <h1 class="title-page">Crear cuenta</h1>
    </div>
    <div class="second-container-content">    
    <form role="form" class="form-horizontal" action="/registro/ok" method="post"></form>
    <div class="panel-default">
        <div class="panel-heading">
            <p>Completa los siguientes datos:</p>
        </div>
    <div class="panel-body">
    <div class="panel-group">
        <label for="email" class="control-label">Email</label>
        <div class="unknown">
            <input type="email" class="form-control" name="email" id="email" placeholder="Escribe tu email">
            <p class="help-block">"Usá tu propio email, asegúrate de tener acceso al mismo <b>SIEMPRE</b> ya que no podrás cambiarlo."</p>
        </div>
    <div class="panel-group">
        <label for="cuenta" class="control-label">Cuenta</label>
        <div class="unknown">
            <input type="text" class="form-control" name="Cuenta" id="cuenta" placeholder="Nombre de usuario" maxlength="10">
            <p class="help-block">"Entre 4 y 10 caracteres."</p>
     </div>
    </div>
    <div class="panel-group">
        <label for="password" class="control-label">Contraseña</label>
        <div class="unknown">
            <input type="password" class="form-control" name="Password" id="password" placeholder="Inserte contraseña" maxlength="10">
            <p class="help-block">"Entra 4 y 10 caracteres, Asegúrese de recordarla bien, en caso de olvidarla, puede solicitarla vía email."</p>
        </div>
    </div>
    <div class="panel-group">
        <label for="repassword" class="control-label">Repite la contraseña</label>
        <div class="unknown">
            <input type="repassword" class="form-control" name="Repassword" id="repassword" placeholder="Repita la contraseña" max="10">
        </div>
    </div>
    <br>
    <div class="checkbox">
        <label>
            <input name="t3" value="1" type="checkbox" required>
            Acepto la responsabilidad de mantener segura mi cuenta de <b>email</b> para así tener resguardada mi cuenta.
        </label>
        <br>
    </div>
    <div class="panel-group">
            <input type="submit" value="Send" namespace="Crear cuenta!">  
        </div>
    </div>
</body>
</html>