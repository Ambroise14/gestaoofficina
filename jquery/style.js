$(document).ready(function(){
valid=true;

 $('#vb').click(function(){

   if($('#code').val()==""){
     $('#errocode').text('o campo de id nao deve ser vazio');
     $('#errocode').css('color','red');
     valid=false;
   }

   if($('#nome').val()==""){
    $('#nome').css('border','solid 2px red');
    $('#nome').focus();
    $('#erronom').text('o campo de nome de cliente nao deve ser vazio');
    $('#erronom').css('color','red');
    valid=false;
  }

   if($('#data').val()==""){
    $('#data').css('border','solid 2px red');
    $('#data').focus();
    $('#errodata').text('o campo de data nao deve ser vazio');
    $('#errodata').css('color','red');
    valid=false;
  }

  if($('#venda').val()==""){
    $('#id').css('border','solid 2px red');
    $('#venda').focus();
    $('#errovenda').text('o campo de id nao deve ser vazio');
    $('#errovenda').css('color','red');
    valid=false;
  }

  if($('#des').val()==""){
    $('#des').css('border','solid 2px red');
    $('#des').focus();
    $('#errodes').text('o campo de id nao deve ser vazio');
    $('#errodes').css('color','red');
    valid=false;
  }
  if($('#pu').val()==""){
    $('#pu').css('border','solid 2px red');
    $('#pu').focus();
    $('#errovalor').text('o campo de nome nao deve ser vazio');
    $('#errovalor').css('color','red');
    valid=false;
  }
 return valid;
 });
 $('#code').keyup(function(){
  $('#code').css('border','solid 2px black');
 $('#errocode').text('');
  
});

 $('#nome').keyup(function(){
  $('#nome').css('border','solid 2px black');
 $('#erronom').text('');
  
});
$('#data').mouseover(function(){
  $('#data').css('border','solid 2px black');
 $('#errodata').text('');
  
});

$('#venda').keyup(function(){
  $('#venda').css('border','solid 2px black');
 $('#errovenda').text('');
  
});

$('#des').keyup(function(){
  $('#des').css('border','solid 2px black');
 $('#errodes').text('');
  
});
$('#pu').keyup(function(){
  $('#pu').css('border','solid 2px black');
 $('#errovalor').text('');
  
});

});