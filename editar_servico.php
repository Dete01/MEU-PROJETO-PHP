<?php

//session_start();

// Requer que o arquivo funcione corretamente ou esteja presenta para execução do programa
require 'banco.php'; //Arquivo de conexão com o Banco
require 'ajudantes.php'; //Arquivo de ferramentas

$exibir_tabela_servicos = false;
$tem_erros = false;
$erros_validacao = [];

if (tem_post()) {
    $servico = [
        'id' => $_POST['id_servico'],
        'nome' => $_POST['nome_servico']
    ];

    if (strlen($servico['nome']) == 0){
        $tem_erros = true;
        $erros_validacao['nome'] = 'O nome do servico é obrigatório!';
    }

    if (array_key_exists('descricao', $_POST)) {
        $tarefa['descricao'] = $_POST['descricao_servico'];
    }


    if(!$tem_erros){
        editar_servico($conexao, $servico);
        header('Location: servicos.php');
        die();
    }  
}

$servico = buscar_servico_para_editar($conexao, $_GET['id_servico']);

$servico['nome'] = (array_key_exists('nome',$_POST)) ? $_POST['nome_servico'] : $servico['nome'];

$servico['descricao'] = (array_key_exists('descricao',$_POST)) ? $_POST['descricao_servico'] : $servico['descricao'];


// Include pode avisar sobre ausência ou erro mas não impede a execução do programa
include 'template.php';


?>