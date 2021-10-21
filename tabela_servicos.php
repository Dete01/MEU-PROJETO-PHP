
<body>
    
    <main class="container-fluid">

        <section class="row mx-5 mt-3 p-3 mb-3 bg-white rounded">


        <table>
            <tr>
                <th>Servicos</th>
                <th>Descrição</th>
                <th>Opções</th>
            </tr>
            <?php foreach ($lista_servicos as $servicos) : ?>
                <tr>
                    <td>
                        <a href="servico.php?id=<?php echo $servicos['srv_codigo']; ?>"> 
                            <?php echo $servicos['srv_nome'] ?>
                        </a>
                    </td>

                    <td><?php echo $servicos['srv_descricao'] ?></td>
                    
                    <td>
                        <a href="editar_servico.php?id=<?php echo $servicos['srv_codigo']; ?>">&#9989 Editar</a>
                        <a href="remover_servico.php?id=<?php echo $servicos['srv_codigo']; ?>">&#10060 Apagar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>

        </section>

    <main/>

</body>