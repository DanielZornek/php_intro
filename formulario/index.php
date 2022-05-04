<?php
    include "servicos/servico_inside_sec.php";
?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Formulário </title>
        <link rel="stylesheet" href="style.css"> </link>

    </head>

        <body>

            <h1 id="titulo"> Formulário para Inscrição de Competidores </h1>
                <section id="sec">
                    <form action="script.php" method="post" id="formu">
                      <?php 

                        $mensagem_sucesso = obter_sucesso_msg();
                            if(!empty($mensagem_sucesso))
                            {
                                echo $mensagem_sucesso;
                            }

                            $mensagem_erro = obter_erro_msg();
                            if(!empty($mensagem_erro)){
                                echo $mensagem_erro; 
                            }
                      ?>
                    <p> Seu Nome: <input type="text" name="nome" class="campo"> </p>
                    <p> Sua Idade: <input type="text" name="idade" class="campo"> </p>
                    <p><input type="submit" value="Enviar dados do Competidor" id="botao"/></p>
                    </form>
                </section>
        </body>

</html>