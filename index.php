<?php

require_once 'classes/Pessoa.php';
?>
<h4><i> Testando classes, metodos, funcoes e passagem de parametro </i></h4>
<?php
$pessoa = new Pessoa();
// $pessoa = new Pessoa('Raphael Blefari');
echo $pessoa->getNome()  . '<br>' ;
$pessoa->setNome('Rodrigo Blefari Goncalves');
echo $pessoa->getNome()  . '<br>' ;
$pessoa->clearNome();
echo $pessoa->getNome();
echo '<pre>'; print_r($pessoa); echo '<pre>';
?>
<h4><i> Testando Heranca </i></h4>
<?php
require_once 'classes/Programador.php';

$programador = new Programador();
// $pessoa = new Pessoa('Raphael Blefari');
echo $programador->getNome()  . '<br>' ;
$programador->setNome('Rodrigo Blefari Goncalves');
echo $programador->getNome()  . '<br>' ;
//$programador->clearNome();

echo $programador->getLinguagem()  . '<br>' ;
$programador->setLinguagem('PHP');
echo $programador->getLinguagem()  . '<br>' ;
//$programador->clearLinguagem();

echo '<pre>'; print_r($programador); echo '<pre>';


?>
<h4><i> Constantes de classes </i></h4>
<?php
	echo $programador::PLANETA;
?>
<h4><i> Testando Namespaces de funcoes </i></h4>
<?php
require_once 'functions/soma1.php';
require_once 'functions/soma2.php';
 echo soma(1,2) . "<br>";
 echo somadois\soma(2,2);

