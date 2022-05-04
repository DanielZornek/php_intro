<?php

    include "servicos/servico_inside_sec.php";
    include "servicos/servico_val.php";
    include "servicos/ser_categoria_cometidor.php";

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
      
    defineCategoriaCompetidor($nome, $idade);

    header('location: index.php');

?>