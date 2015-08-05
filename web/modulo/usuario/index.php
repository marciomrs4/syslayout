<?php
//Include do config do modulo
include_once 'config.php';


$box = new container\caixa\Box();

$D = $box->writer();

echo ($D->format('%Y') == '00') ? '' : $D->format('%Y Ano(s) ');
echo ($D->format('%M') == '00') ? '' : $D->format('%M Mes(es) ');
echo ($D->format('%D') == '00') ? '' : $D->format('%D Dia(s) ');
echo ($D->format('%H') == '00') ? '' : $D->format('%H Hora(s) ');
echo ($D->format('%I') == '00') ? '' : $D->format('%I Minuto(s) ');
echo ($D->format('%S') == '00') ? '' : $D->format('%S e Segundos');



//echo $D->format('%M'),$D->format('%D'), $D->format('%H'), $D->format('%I'), $D->format('%S');

//print_r($_SESSION);












footer($configGlobal);
?>