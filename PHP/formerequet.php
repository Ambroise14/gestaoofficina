<?php
require_once('fonctionrequet.php');
require_once('functiondata.php');
//require_once('pagination.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/cliente.css">
  <title>Cadastramento do clientes</title>
</head>
<body>
  <fieldset>
<div id="ba">
<?php
  if(isset($error))
  {
    foreach($error as $msg)
     {
      echo $msg .'</br>';
     }
  }
?>
</div>
    <h2>CADASTRAMENTO DOS PEDIDOS</h2>
    <form  method="POST">
      <div id="cado1">
      <label >ID:</label>
      <input type="number" name="code" id="code" class="longo" placeholder="digige o id de cliente"  value="<?php if(isset($error)){echo $code;};?>"/> 
      <label>Nome:</label>
      <input type="text" name="nome" id="nome" class="longo" placeholder="digige o nome de cliente"   value="<?php if(isset($error)){echo $nome;};?>"/>
      <label>Data:</label>
      <input type="date"  name="data" id="data" class="longo" value="<?php echo $datahora;?>"/>
      <label>Vendedor:</label>
      <input type="text" name="venda" id="venda" class="longo" placeholder="digige o id de vendedor"value="<?php if(isset($error)){echo $venda;};?>"/>
     </div> 
     <div id="cado2">
       <label>Descricao:</label>
       <textarea name="des" id="des" placeholder="digige  a descricao" class="longo1"<?php if(isset($error)){echo $des;};?>></textarea>
       <label>valor oçado:</label>
       <input type="number" name="pu" id="pu" class="longo" placeholder="digige  o valor" value="<?php if(isset($error)){echo $pu;};?>" />´
       <div id="ambroise"><a href="afficharcliente.php">EDITAR</a></div>
       </div>
       <input type="submit" name="vb" id="vb" value="cadastrar"/>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../jquery/style.jsss"></script>
    </script>
  </fieldset>
</body>
</html>