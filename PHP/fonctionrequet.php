<?php
// essa parte e para a validação de formulario com formrequet
  if(isset($_POST['vb'])){
    $code= $_POST['code'];
    $nome= $_POST['nome'];
    $data= $_POST['data'];
    $des= $_POST['des'];
    $pu= $_POST['pu'];
    $venda= $_POST['venda'];

    $error=array();

    if(($code)==""){
      $error[]='Preenche o campo de codigo por favor';
      return false;

    }if(strlen($code)<2){
      $error[]='o campo de codigo deve ter o minimo 3 numeros';
      return false;
    }

    if(($nome)==""){
      $error[]='O campo do nome de ver ser preenchado';
      return false;
    }
    if(strlen($nome)<=4){
      $error[]='O campo do nome deve ter o minimo 8 caracters,por favor';
      return false;
    }
    if(($data)==""){
      $error[]='seleciona a data de operaçao por favor';
      return false;
    }
    if(($venda)==""){
      $error[]='o campo do nome de vendedor nao deve ser vazio';
      return false;
    }
    if(($des)==""){
      $error[]='o campo de descricão de ver preenchedo,por favor';
      return false;
    }
    if(strlen($des)<=10){
      $error[]='o campo de descrição deve ter o minimo 12 caracters';
      return false;
    }
    if(($pu)==""){
      $error[]='o campo do valor de oçamento deve ser preemchedo';
      return false;
    }
    else{
      include('caregardado.php');// essa parte e para caregar as informaçoes que vao no dado base
    }

}
?>
  