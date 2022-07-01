<?php
//funcao apra sanitizar limpar entradas

function limpaPost($dado){
    $dado = trim($dado);    // remove espaços em branco de uma string
    $dado = htmlspecialchars($dado);    // remove "<" e ">" da string
    $dado = stripslashes($dado);     // remove barras invertidas de uma string
    return $dado;   // retorna so dados acima
}
?>