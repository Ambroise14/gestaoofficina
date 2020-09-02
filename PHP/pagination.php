<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  //essa parte e sobre a paginaçao
   $connect=mysqli_connect("localhost","root","","DB_OFICINA");
  //resultado por page
  $npage=5;
  // nombro total de linha na dada base
  $sql="SELECT * FROM CLIENTS ";
  $resultado=mysqli_query($connect,$sql);
  $encontra=mysqli_num_rows($resultado);
  //determina o nombre total de paage
 $n3par=ceil($encontra/$npage);
 if(!isset($_GET['page'])){
   $page=1;
 }else
 {
   $page=$_GET['page'];
 }
 $limit=($page-1)*$npage;
 $sql="SELECT * FROM CLIENTS LIMIT ".$limit. ','.$npage;
 $resultado=mysqli_query($connect,$sql);
 ?>
<?php
    //essa parte e sobre  o campo de busca 
    
  if(isset($_POST['vbs'])){
       $nomecliente=$_POST['busca1'];
       $vendedor=$_POST['busca2'];
       $data=$_POST["data"];

    if(!empty($nomecliente) && !empty($nomecliente)){
        $sql="SELECT * FROM CLIENTS WHERE nomess='$nomecliente' AND vendedors='$vendedor' OR datas ='$data' ORDER BY datas DESC "; 
        $resultado=mysqli_query($connect,$sql);
      }else
      {
        echo 'por favor,preenche os campos do nome cliente,de nome vendedor ,pode selecionar  a data de operaçao tambem para pesquisar';
      }
  }
  //fim de codigo de campo de busca
?> 
 <?php
  for($page=1;$page<$n3par;$page++){
   echo '<a href="index.php?page='.$page.'">'.$page.'</a>';
 }
  ?>
</body>
</html>