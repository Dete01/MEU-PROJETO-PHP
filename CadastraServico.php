<form method="post">

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width", initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">      
        <title>Pousada Clemente Pitrez</title>
    </head>
    <body>

        <main class="container-fluid">
            <section class="row mx-5 mt-3 p-3 mb-3 bg-white rounded">

            <legend><?php echo ($servico['id'] > 0) ? '&#9989 Atualizar Servico' : '&#9200 Cadastrar' ?></legend>

            <!-- o input do id fica escondido -->
            <input type="hidden" name="id_servico" value="<?php echo $servico['id']; ?>">
           
                <form action="#" method="get">
                    <h4 class="mb-3">Serviços Adicionais</h4>
                      <div class="mb-3">
                        <label for="nome_servico" class="form-label">Nome do Serviço</label>
                        <?php if($tem_erros && array_key_exists('nome',$erros_validacao)) : ?>
                            <span class="erro">
                                <?php echo $erros_validacao['nome']; ?>
                            </span>
                        <?php endif; ?>
                        <input type="text" class="form-control" id="nome_servico" name="nome_servico" value="<?php echo $servico['nome']; ?>" required>
                      </div>
                      
                      <div class="mb-3">
                        <label for="descricao_servico" class="form-label">Descrição</label>
                        <?php if($tem_erros && array_key_exists('descricao',$erros_validacao)) : ?>
                            <span class="erro">
                                <?php echo $erros_validacao['descricao']; ?>
                            </span>
                        <?php endif; ?>
                        <input type="text" class="form-control" id="descricao_servico" name="descricao_servico" value="<?php echo $servico['nome']; ?>" required>
                      </div>             

                  
                     <div class="row">
                         <div class="col-lg-2 col-sm-12 mb-3">
                             <input type="submit" class="btn btn-primary btn-lg" value="<?php echo ($servico['id'] > 0) ? 'Atualizar' : 'Cadastrar' ?>">
                         </div>
                     </div>


                </form>
            </section>

        </main>
       

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    </body>
</html>
</form>