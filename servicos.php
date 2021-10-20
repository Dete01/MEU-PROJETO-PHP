<?php

//session_start();

// Requer que o arquivo funcione corretamente ou esteja presenta para execução do programa
require 'banco.php'; //Arquivo de conexão com o Banco
require 'ajudantes.php'; //Arquivo de ferramentas

$exibir_tabela_servicos = true;
$tem_erros = false;
$erros_validacao = [];

$lista_servicos = buscar_servicos($conexao);//Recebe e guarda os resultados de consulta no Banco

if (tem_post()) {
    $servico = [
        'nome' => $_POST['nome_servico'],
        'descricao' =>  $_POST['descricao_servico']
    ];

    if(strlen($servico['nome']) == 0){
        $tem_erros = true;
        $erros_validacao['nome'] = 'O nome do servico é obrigatório!';
    }

    if (array_key_exists('descricao', $_POST)) {
        $servico['descricao'] = $_POST['descricao_servico'];
    }


    if(!$tem_erros){
        inserir_servico($conexao, $servico);
        header('Location: servicos.php');
        die();
    }
}

$servico = [
    'id'        => $_POST['id'] ?? '',
    'nome'      => $_POST['nome_servico'] ?? '',
    'descricao' => $_POST['descricao_servico'] ?? ''
];

// Include pode avisar sobre ausência ou erro mas não impede a execução do programa
include 'template.php';


?>