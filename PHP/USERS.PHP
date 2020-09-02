
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="Stylesheet" type="text/css" href="../CSS/user.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <?php
require_once("connect.php");
 if(isset($_POST['vb'])){
  $pseudo=$_POST["pseudo"];
  $ut=$_POST["usery"];
  $ema1=$_POST["email1"];
  $ema2=$_POST["email2"];
  $pa1=$_POST["passe1"];
  $pa2=$_POST["passe2"];
  if(!empty($pseudo)||!empty($ut)||!empty($ema1)||!empty($ema2) ||!empty($pa1) ||!empty($pa2)){
    $useres=$db->prepare("INSERT INTO USERS(pseudo,usernames,emails,motpasse)VALUES('$pseudo','$ut','$ema1','$pa1')");
    $useres->execute() ;
  echo "bravo";
  }else{
    echo 'por favor,preenche todos os campos';
  }
 
 }
 ?>
 <h1>CRIAR UMA CONTA</h1>
  <fieldset>
  <form method="POST">
    <label>Pseudo:</label>
    <input type="text" name="pseudo" class="ambroise">
    <label>User name:</label>
    <input type="text" name="usery"  class="ambroise">
    <label>Email:</label>
    <input type="email" name="email1" class="ambroise">
    <label>Confirmation:</label>
    <input type="email" name="email2"  class="ambroise">
    <label>Mot de passe:</label>
    <input type="password" name="passe1"  class="ambroise">
    <label>Confirmation:</label>
    <input type="password" name="passe2"  class="ambroise">
    <input type="submit" name="vb" value="Envoyer" id="vb"/>ja tem conta?<a href="login.php">se connetar</a>
    </form>
  </fieldset>
</body>
</html>