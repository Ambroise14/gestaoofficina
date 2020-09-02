<?php
require_once('connect.php');
$id=$_GET['code'];
$reqtdelet=$db->prepare("DELETE FROM CLIENTS WHERE id=$id");
$reqtdelet->execute();
header("Location:formerequet.php");
?>