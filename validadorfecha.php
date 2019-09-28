<?php
$fechaAct = date('Y-m-d');
$fecha = date('2019-07-15');
$fechaActual =  strtotime('+30 day',strtotime($fecha));
$fechaNueva = date('Y-m-d',$fechaActual);
$fechaActual2 =  strtotime('+45 day',strtotime($fecha));
$fechaNueva2 = date('Y-m-d',$fechaActual2);
$fechaActual3 =  strtotime('+60 day',strtotime($fecha));
$fechaNueva3 = date('Y-m-d',$fechaActual3);
$fechaActual4 =  strtotime('+61 day',strtotime($fecha));
$fechaNueva4 = date('Y-m-d',$fechaActual4);

if ($fechaNueva >= $fechaAct) {
	echo "menos de 30 dias <br>";
}else{
	echo "0 <br>";
}
if ($fechaNueva2 >= $fechaAct && $fechaNueva < $fechaAct) {
	echo "menos de 45 dias <br>";
}else{
	echo "0<br>";
}
if ($fechaNueva3 >= $fechaAct && $fechaNueva < $fechaAct  && $fechaNueva2 < $fechaAct) {
	echo "menos de 60 dias <br>";
}else{
	echo "0<br>";
}
if ($fechaNueva4 <= $fechaAct) {
	echo "mas de 61 dias <br>";
}else{
	echo "0<br>";
}



?>
