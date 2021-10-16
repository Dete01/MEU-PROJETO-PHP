<?php

$bdServidor = '127.0.0.1'; //Pode ser localhost
$bdUsuario = 'sistema'; //Usuário criado no BD
$bdSenha = '123456'; //Senha totalmente exposta do BD
$bdBanco = 'pousada'; //Nome do BD dentro do Servidor

$conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);

if(mysqli_connect_errno()){ //Função retorna se houve algum erro, caso sim, exibe o erro e encerra a execução do sistema
    echo 'Problemas para conectar no banco. Erro:';
    echo mysqli_connect_error(); //Exibe qual foi o erro
    die(); //Encerra a execução do sistema
}

function buscar_servicos($conexao){
    $sqlBusca = 'SELECT * FROM servico'; //Consulta SQL
    $resultado = mysqli_query($conexao,$sqlBusca); // Função que executa a requisição 

    $servicos = []; //Array vazio para receber os resultados

    while($servico = mysqli_fetch_assoc($resultado)){ //Função que vai passar os resultados para o Array
        $servicos[] = $servico; 
    }

    return $servicos; //Retorna o Array com os resultados
}

function inserir_servico($conexao, $servico){
    
    $sqlInserir = "INSERT INTO servico
        (srv_nome, srv_descricao)
        VALUES
        (
            '{$servico['nome']}',
            '{$servico['descricao']}'            
        )
    ";
    
    mysqli_query($conexao,$sqlInserir);
}

function buscar_servico_para_editar($conexao,$id){

    $sqlBusca = 'SELECT * FROM servico WHERE srv_codigo = ' .$id;

    $resultado = mysqli_query($conexao,$sqlBusca);

    return mysqli_fetch_assoc($resultado);    
}

function editar_servico($conexao, $servico){

    $sqlBusca = "UPDATE servico SET
                    srv_nome = '{$servico['nome']}',
                    srv_descricao = '{$servico['descricao']}'
                    WHERE srv_id = {$servico['id']}";

    mysqli_query($conexao,$sqlBusca);

}

function remover_servico($conexao, $id){
    $sqlDelete = "DELETE FROM servico WHERE srv_codigo = {$id}";

    mysqli_query($conexao,$sqlDelete);
}

function buscar_servico($conexao, $id){

    $sqlBusca = "SELECT * FROM servico WHERE srv_codigo = {$id}";
    
    $busca = mysqli_query($conexao,$sqlBusca);

    return mysqli_fetch_assoc($busca);
}

?>