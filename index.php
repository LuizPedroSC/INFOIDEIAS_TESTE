<?php

include('src/funcoes.php');

use SRC\Funcoes;

$funcoes = New Funcoes();

echo '<hr/>';
// Teste da função SeculoAno
// Ano 1905 = século 20
echo 'Ano 1905 = século ' . $funcoes->SeculoAno(1905) . '<br/>';
// Ano 1700 = século 17
echo 'Ano 1700 = século ' . $funcoes->SeculoAno(1700) . '<br/>';
echo '<hr/>';
// Teste da função PrimoAnterior
// Numero = 10 resposta = 7
echo 'Numero = 10 resposta = ' . $funcoes->PrimoAnterior(10) . '<br/>';
// Número = 29 resposta = 23
echo 'Número = 29 resposta = ' . $funcoes->PrimoAnterior(29) . '<br/>';
echo '<hr/>';
/*  Teste da função SegundoMaior
    Array multidimensional = array (
        array(25,22,18),
        array(10,15,13),
        array(24,5,2),
        array(80,17,15)
    );
    resposta = 25*/
echo 'resposta ' . $funcoes->SegundoMaior(array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	)) . '<br/>';
echo '<hr/>';