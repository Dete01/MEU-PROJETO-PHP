<?php

    require 'banco.php';

    remover_servico($conexao,$_GET['id']);

    header('Location: servicos.php');

?>