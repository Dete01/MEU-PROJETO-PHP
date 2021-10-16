<?php

include 'banco.php';
include 'ajudantes.php';

$tem_erros = false;
$erros_validacao = [];

if(tem_post()){

}

$servico = buscar_servico($conexao, $_GET['id']); // não remover o id...está correto!

include 'template_servico.php';

?>