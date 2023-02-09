<?php

function pontuacao_array(){
# criação array com base no num formado
$array = range(0,15);

# Contagem de cada um das 3 condições para a pontuação
$count_array_1 = 0;
$count_array_3 = 0;
$count_array_5 = 0;
foreach ($array as &$val) {
    if ($val % 2 == 0 and $val != 8) {
        $count_array_1 += 1;
    } elseif ($val % 2 == 1) {
        $count_array_3 += 1;
    } else {
        $count_array_5 += 1;
    }
}

# Pontuação números pares
$pontos_pares = $count_array_1;

# Cálculo Pontuação impar
$pontos_impares =  $count_array_3 * 3;

# Cálculo Pontuação numero 8
$pontos_8 = $count_array_5 * 5;

# Pontuação total
$pontuacao_total = $pontos_pares + $pontos_impares + $pontos_8;
return "Pontuação total final é de: $pontuacao_total";
}

# Executando a função
echo pontuacao_array()

?>
