
<?php 
//essa parte e tambem a funcçao que permite a busca mas que nao foi usado
function FilterTable($query)
{
  $connect=mysqli_connect("localhost","root","","DB_OFICINA");
  $ambroise=mysqli_query($connect,$query);
  return $ambroise;
  //$query="SELECT * FROM `CLIENTS` WHERE CONCAT(`clients`,`vendedors`) LIKE '%".$val."%' ";

}

    $query="SELECT * FROM CLIENTS";
    $resultado=FilterTable($query);
if(isset($_POST['vbs']))
{
    $nomecliente=$_POST["busca1"];
     $query="SELECT * FROM CLIENTS WHERE nomess='$nomecliente'"; 
     $resultado=FilterTable($query);
    
}

?>                                                                                                                                                                                                                                                                  
