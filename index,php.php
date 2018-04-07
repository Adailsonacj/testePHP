<?php
/**
 * Created by PhpStorm.
 * User: adailson
 * Date: 07/04/18
 * Time: 10:55
 */
$frase = "Testando o corte de uma determinada frase, vejamos se está tudo certo";
echo $frase;
$fraseCort = substr($frase, 0, 30);
echo '(br/)';
echo $fraseCort;