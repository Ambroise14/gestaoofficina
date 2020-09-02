<?php
require_once('functiondata.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/cliente.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
</head>
<body>
  <fieldset>
    <h2>CADASTRAMENTO DOS PEDIDOS</h2>
    <form method="POST" action="caregardado.php">
      <div id="cado1">
      <label >ID:</label><span id="errocode" class="style"></span>
      <input type="number" name="code" id="code" class="longo" placeholder="digige o id de cliente" onkeyup="numero(this);return false"/> 
      <label>Nome:</label> <span id="erronom" class="style"></span>
      <input type="text" name="nome" id="nome" class="longo" placeholder="digige o nome de cliente"/>
      <label>Data:</label><span id="errodata" class="style"></span>
      <input type="datetime" name="data" id="data" class="longo" value="<?php echo $datahora;?>"/>
      <label>Vendedor:</label><span id="errovenda" class="style"></span>
      <input type="text" name="venda" id="venda" class="longo" placeholder="digige o id de vendedor"/>
     </div> 
     <div id="cado2">
       <label>Descricao:</label><span id="errodes" class="style"></span>
       <textarea name="des" id="des" placeholder="digige  a descricao" class="longo1" 1- 2-></textarea>
       <label>valor oçado:</label> <span id="errovalor" class="style"></span>
       <input type="text" name="pu" id="pu" class="longo" placeholder="digige  a descricao" />´
       <div id="ambroise"><a href="afficharcliente.php">EDITAR</a></div>
       </div>
       <input type="submit" name="vb" id="vb" value="cadastrar"/>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../jquery/style.js"></script>
    </script>
  </fieldset>
</body>
</html>