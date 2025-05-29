<?php
//Arrays com strings 
$estados= array("Distrito Federal"=>"Brasília","Goiás"=>"Goiânia","Mato Grosso"=>"Cuiabá",);

echo $estados["Distrito Federal"];

echo"<br>";
//Arrays por posição 
$capitais= array(0=>"Belém",1=>"Bahia",2=>"Marajó");

printf("Essa é a capital do Pará => %s",$capitais[0]);
echo"<br>";
echo"<br>";
//Array Multidimencionais
$estados=array("Distrito Federal"=>array ("população"=>"2.982.818","capital"=>"Brasilia"));
echo $estados['Distrito Federal']['população'];

?>