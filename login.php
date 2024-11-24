<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
</head>
<body id="body-login">
  <div class="tela-login">
    <H1 id="title-login">LOGIN</H1>
    <form action="testlogin.php" method='POST'>
      <input class="input-login" type="text" name="usuario" placeholder="usuário">
      <br><br>
      <input class="input-login" type="password" name="senha" placeholder="senha">
      <br><br>
      <input class="input-submit" type="submit" name="submit" value="ENVIAR">
    </form>
  </div>  
</body>
</html>