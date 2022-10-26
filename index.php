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

//Teste da função SequenciaCrescente   
echo '[1, 3, 2, 1]  false = ' . ($funcoes->SequenciaCrescente([1, 3, 2, 1]) ? 'true':'false') . '<br/>';
echo '[1, 3, 2]  true = ' . ($funcoes->SequenciaCrescente([1, 3, 2]) ? 'true':'false') . '<br/>';
echo '[1, 2, 1, 2]  false = ' . ($funcoes->SequenciaCrescente([1, 2, 1, 2]) ? 'true':'false') . '<br/>';
echo '[3, 6, 5, 8, 10, 20, 15] false = ' . ($funcoes->SequenciaCrescente([3, 6, 5, 8, 10, 20, 15]) ? 'true':'false') . '<br/>';
echo '[1, 1, 2, 3, 4, 4] false = ' . ($funcoes->SequenciaCrescente([1, 1, 2, 3, 4, 4]) ? 'true':'false') . '<br/>';
echo '[1, 4, 10, 4, 2] false = ' . ($funcoes->SequenciaCrescente([1, 4, 10, 4, 2]) ? 'true':'false') . '<br/>';
echo '[10, 1, 2, 3, 4, 5] true = ' . ($funcoes->SequenciaCrescente([10, 1, 2, 3, 4, 5]) ? 'true':'false') . '<br/>';
echo '[1, 1, 1, 2, 3] false = ' . ($funcoes->SequenciaCrescente([1, 1, 1, 2, 3]) ? 'true':'false') . '<br/>';
echo '[0, -2, 5, 6] true = ' . ($funcoes->SequenciaCrescente([0, -2, 5, 6]) ? 'true':'false') . '<br/>';
echo '[1, 2, 3, 4, 5, 3, 5, 6] false = ' . ($funcoes->SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]) ? 'true':'false') . '<br/>';
echo '[40, 50, 60, 10, 20, 30] false = ' . ($funcoes->SequenciaCrescente([40, 50, 60, 10, 20, 30]) ? 'true':'false') . '<br/>';
echo '[1, 1] true = ' . ($funcoes->SequenciaCrescente([1, 1]) ? 'true':'false') . '<br/>';
echo '[1, 2, 5, 3, 5] true = ' . ($funcoes->SequenciaCrescente([1, 2, 5, 3, 5]) ? 'true':'false') . '<br/>';
echo '[1, 2, 5, 5, 5] false = ' . ($funcoes->SequenciaCrescente([1, 2, 5, 5, 5]) ? 'true':'false') . '<br/>';
echo '[10, 1, 2, 3, 4, 5, 6, 1] false = ' . ($funcoes->SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]) ? 'true':'false') . '<br/>';
echo '[1, 2, 3, 4, 3, 6] true = ' . ($funcoes->SequenciaCrescente([1, 2, 3, 4, 3, 6]) ? 'true':'false') . '<br/>';
echo '[1, 2, 3, 4, 99, 5, 6] true = ' . ($funcoes->SequenciaCrescente([1, 2, 3, 4, 99, 5, 6]) ? 'true':'false') . '<br/>';
echo '[123, -17, -5, 1, 2, 3, 12, 43, 45] true = ' . ($funcoes->SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]) ? 'true':'false') . '<br/>';
echo '[3, 5, 67, 98, 3] true = ' . ($funcoes->SequenciaCrescente([3, 5, 67, 98, 3]) ? 'true':'false') . '<br/>';

echo '<hr/>';