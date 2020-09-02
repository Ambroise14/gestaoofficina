<?php
require_once('pagination.php');//caregar o codigo de paginacao
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="../CSS/cliente.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<fieldset>
    <h2>Lista dos pedidos de clientes</h2>
<form method="POST">
      <input type="text" name="busca1" id="busca1" placeholder="Digite O nome de cliente" class="mk"/><input type="text" name="busca2" id="busca2" placeholder="Digite o nome de vendedor" class="mk"/>
      <input type="date" name="data" id="data" class="mk" placeholder="gvvvvv"/>
      <input type="submit" name="vbs" id="vbs" value="BUSCAR"/>
</form>
</fieldset>
<table  class="table table-bordered table-hover">
    <thead>
     <tr>
          <th>Data && Hora</th>
          <th>Descricao</th>
          <th>Valor ocado($R)</th>
          <th>Cliente</th>
          <th>Vendedor</th>
          <th>Remover</th>
          <th>Apagar</th>
      </tr>
    </thead>
   <?php while($row=mysqli_fetch_array($resultado)):?>
  <tr>
    <td><?php echo $row['datas'];?></td>
    <td><?php echo $row['descricao'];?></td>
    <td><?php echo $row['put'];?></td>
    <td><?php echo $row['nomess'];?></td>
    <td><?php echo $row['vendedors'];?></td>
    <td><a href="editar.php? code=<?php echo $row['id'];?>">EDITAR</a></td>
    <td><a href="apaga.php? code=<?php echo $row['id'];?>">APAGAR</a></td>
  </tr>
  <?php endwhile;?>   
  </table>
  <?php
  for($page=1;$page<$n3par;$page++){
    echo '<a href="index.php?page='.$page.'">'.$page.'</a>';
  }
   ?>
</body>
<div id="novo">
  <a href="formerequet.php">clique aqui para cadastrar um nono</a>
</div>
</html>