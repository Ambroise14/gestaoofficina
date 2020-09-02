
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="Stylesheet" type="text/css" href="../CSS/login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
   require_once("connect.php");
      if(isset($_POST['vb'])){
        $pseudo=$_POST['pseudo'];
        $passeword=$_POST['pa1'];
        $confim=$_POST['pa2'];
        if(!empty($pseudo) && !empty($passeword) && !empty($confim)){
          $req=$db->prepare("SELECT * FROM USERS WHERE pseudo='$pseudo' AND motpasse='$passeword'");
          $req->execute();
          $ligne=$req->rowCount();
          if($ligne==1){
            header("Location:menu.php");
            }else{
              echo "Usario ou seja a senha esta incorreto";
            }
        }else
        {
          echo 'Os campos devem ser preenchendo por favor';
        }
        
      }
   
  ?>
    <h1>SE CONNECTAR</h1>
<fieldset>
 <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
 <label>USER:</label>
 <input type="text" name="pseudo" placeholder="pseudo" autocomplete="new pseudo" require  class="ambroise" >
 <label>SENHA:</label>
 <input type="password" name="pa1" placeholder="pseudo" autocomplete="new pseudo" require  class="ambroise" >
 <label>CONFIRMAÇÃO DA SENHA:</label>
 <input type="password" name="pa2" placeholder="pseudo" autocomplete="new pseudo" require  class="ambroise">
 <input type="submit" name="vb" value="Registre">
</form> 
</fieldset>
</body>
</html>