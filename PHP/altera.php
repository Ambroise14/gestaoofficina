<?php
require_once('connect.php');
$matricula=htmlspecialchars(trim($_POST['code']));
$data=htmlspecialchars(trim($_POST["data"]));
$descrip=htmlspecialchars(trim($_POST["des"]));
$valor=htmlspecialchars(trim($_POST["pu"]));
$client=htmlspecialchars(trim($_POST["nome"]));
$vendedor=htmlspecialchars(trim($_POST["venda"]));
$requetaltera=$db->prepare("UPDATE `clients` SET `datas`='$data',`descricao`='$descrip',`put`='$valor',`nomess`='$client',`vendedors`='$vendedor' WHERE id=$matricula");
$requetaltera->execute();
header("Location:afficharcliente.php");
?>