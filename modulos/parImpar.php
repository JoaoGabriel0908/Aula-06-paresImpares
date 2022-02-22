<?php
/******************************************************** 
* Objetivo: arquivo para criar funções de separação de par e ímpar
* Data: 22/02/2022
* Autor: João Gabriel
* Versão: 1.0
*********************************************************/

// Entregando os números para teste
$resultado = numerosParesImpares(0,10);
echo('<pre>');
print_r($resultado);
echo('</pre>');

// Função para separar uma sequência de números ímpares
function numerosPares($numeroInicial, $numeroFinal){

    // Recebe os dados de argumentos da função
    $numInicial = (int) $numeroInicial;
    $numFinal = (int) $numeroFinal;
    $pares = array();
    $cont = (int) 0;

    while ($numInicial <= $numFinal){
        if($numInicial % 2 == 0){
            $pares[$cont] = $numInicial;
            $cont++;
        }
        $numInicial++;
    }
    return $pares;
}

// Função para separar uma sequência de números pares
function numerosImpares($numeroInicial, $numeroFinal){

    // Recebe os dados de argumentos da função
    $numInicial = (int) $numeroInicial;
    $numFinal = (int) $numeroFinal;
    $impares = array();
    $cont = (int) 0;

    while ($numInicial <= $numFinal){
        if($numInicial % 2 == 1){
            $impares[$cont] = $numInicial;
            $cont++;
        }
        $numInicial++;
    }
    return $impares;
}

// Função que retorna duas listas a lista par e ímpar
function numerosParesImpares($numeroInicial, $numeroFinal){

    // Recebe os dados de argumentos da função
    $numInicial = (int) $numeroInicial;
    $numFinal = (int) $numeroFinal;

    // Variaveis para criar os arrays individuais (pares e impares)
    $pares = array();
    $impares = array();

    // Chama as funções que separam numeros pares e impares
    $pares = numerosPares($numInicial, $numFinal);
    $impares = numerosImpares($numInicial, $numFinal);

    // Criamos um array para armazenar os dois arrays individuais (pares e impares).
    // Criamos uma chave dentro do array chamada "Pares" para identificar a lista dos pares
    // E "Impares" para identificar a lista dos impares.
    $paresImpares = array(
        "Pares"     => $pares,
        "Impares"   => $impares
    );
    return $paresImpares;
}
?>