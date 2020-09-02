<?php
  require_once('connect.php');//connecta 
  require_once('functiondata.php'); // importa a data programada
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/cliente.css">
  <title>Cadastramento do clientes</title>
</head>
<body>
  <?php
  $id=$_GET['code'];
  $requet=$db->prepare("SELECT * FROM CLIENTS WHERE id=$id");
  $requet->execute();
  $nligna=$requet->fetch();
  $desv=$nligna['descricao'];
  echo($desv);
  ?>
  <fieldset>
    <h2>ALTERAÇAO DO PEDIDOS DE CLIENTES</h2>
    <form method="POST" action="altera.php">
      <div id="cado1">
      <label >ID:</label>
      <input type="number" name="code" id="code" class="longo" placeholder="digige o id de cliente" value="<?php echo $nligna['id'];?>"/>
      <label>Nome:</label>
      <input type="text" name="nome" id="nome" class="longo" placeholder="digige o nome de cliente" value="<?php echo $nligna['nomess'];?>"/>
      <label>Data:</label>
      <input type="datetime" name="data" id="data" class="longo"  value="<?php echo $nligna['datas'];?>" />
      <label>Vendedor:</label>
      <input type="text" name="venda" id="venda" class="longo" placeholder="digige o id de vendedor" value="<?php echo $nligna['vendedors'];?>"/>
     </div> 
     <div id="cado2">
       <label>Descricao:</label>
       <textarea name="des" id="des" placeholder="digige  a descricao" class="longo1"><?php echo $nligna['descricao'];?> </textarea>
       <label>valor oçado:</label>
       <input type="text" name="pu" id="pu" class="longo" placeholder="digige  a descricao" value="<?php echo $nligna['put'];?>"/>
       </div>
       <input type="submit" name="vb" id="vb" value="ATERAR"/>
    </form>
  </fieldset>
</body>
</html>