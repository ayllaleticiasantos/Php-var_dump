<?php
//Crie um código que receba vários tipos de variáveis e logo depois apresente no navegador.
$string ="Aqui é um exemplo prático.";
$int=1;
$decimal=(1.1);
$verdade=true;
$nulo=null;
var_dump($string);
echo"<br>";
var_dump($int);
echo"<br>";
var_dump($decimal);
echo"<br>";
var_dump($verdade);
echo"<br>";
var_dump($nulo);
echo"<br>";
//Crie um código em PHP para receber esses mesmos dados,contudo em uma array.

$string ="Aqui é um exemplo prático.";
$int=1;
$decimal=(1.1);
$verdade=true;
$nulo=null;
$variaveis= array("numero"=>1,"falso"=>true);
var_dump($string);
echo"<br>";
var_dump($int);
echo"<br>";
var_dump($decimal);
echo"<br>";
var_dump($verdade);
echo"<br>";
var_dump($nulo);
echo"<br>";
var_dump($variaveis);

?>