<div class="titulo">Operadores Relacionais</div>

<?php

//Operadores relacionais irão dar um resultado true ou false e assim podemos
//tomar alguma ação com base nesse resultado

// == > >= < <= != <>

var_dump(1 < 10); // Sim (true)! 1 é menor que 10
var_dump(3 > 4); // Não (false)! 3 não é maior que 4

echo '<br>';

// Podemos unir os oper. relacionais com if else também para 
// nos ajudar a tomar uma ação com esse resultado

if(20 < 18) {
    echo "você é de menor";
} else {
    echo "Você é de maior";
}

echo '<br>';

// Vamos dificultar um pouco mais é colocar variaveis?

$qtdDinheiro = 600;
$valorPassagem = 500;
$diferencaValor = $qtdDinheiro - $diferencaValor;

if($qtdDinheiro < $valorPassagem){
    echo "Desculpe, ainda falta $diferencaValor reais <br>";
    die();
} 

echo "Compra da passagem, efetuada com sucesso!";