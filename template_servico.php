<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width", initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">      
        <title>Pousada Clemente Pitrez</title>
    </head>
    <body>
        <div>
            <h1>Serviço: <?php echo $servico['srv_nome']; ?></h1>
            <p>
                <a href="servicos.php">
                    Voltar para a lista de servicos
                </a>
            </p>

            <p>
                <strong>Descrição:</strong>
                <?php echo exibe_descricao($servico['srv_descricao']); ?>
            </p>


        </div>
    </body>
</html>