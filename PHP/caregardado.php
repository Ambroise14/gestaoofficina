<?php
 require_once('connect.php');
if(isset($_POST['vb'])){
  $matricula=htmlspecialchars(trim($_POST['code']));
  $data=htmlspecialchars(trim($_POST["data"]));
  $descricao=htmlspecialchars(trim($_POST["des"]));
  $valor=htmlspecialchars(trim($_POST["pu"]));
  $client=htmlspecialchars(trim($_POST["nome"]));
  $vendedor=htmlspecialchars(trim($_POST["venda"]));
  $requetclient=$db->prepare(" INSERT INTO CLIENTS(matricule, datas, descricao, put, nomess, vendedors)VALUES('$matricula','$data','$descricao','$valor','$client','$vendedor')");
  $requetclient->execute();
  header("Location:formerequet.php");
}


 
 
?>  