<?php
$dia=date('d');
$m=date('m');
$an=date('Y');
$mois=array('janeiro','fevereiro','março','abril','maio','juinho','julho','agosto','septembro','otobro','novembro','dezembro');
$jours=array('Segunda','terça','quarta','quinta','sexta','sabádo','domigo');
$hora=date('h');
$minuto=date('i');
$secondo=date('s');
$datahora= $an."-". $m ."-" .$dia;
$datahora1= $an."-". $m ."-" .$dia." : ".$hora.":".$minuto.":".$secondo;
echo $datahora;
?> 