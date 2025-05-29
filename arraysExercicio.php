<?php
// Crie um Array com chave, valor e que contenha 5 elementos edepois escolha um para saída no navegador.

$alunos=array(0=>"Ana",1=>"Mia",2=>"Lua",3=>"Laura",4=>"Lia");

printf("A aluna mais alta da sala é %s",$alunos[2]);
echo"<br>";

//Crie um Array multidimensional com dados semelhantes como: carros, cidades ou frutas.
$comidas= array("Sopas"=>array ("Sopa liquida"=>"Cebola","Sopa solida"=>"Batatas"));

echo $comidas['Sopas']['Sopa liquida'];

?>