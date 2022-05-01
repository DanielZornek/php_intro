<?php

    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescentes';
    $categorias[] = 'Adulto';

    // print_r(categorias) mostrando o array
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    
    //mostrando os atributos atribuídos das variáveis
    
    if(empty($nome)){//verificando se está vazio
        echo 'Nome de usuário não pode ser vazio';
        return;
    }
    if(strlen( $nome ) < 3 ){ //strlen vai verificar a quantidade de caracteres

        echo 'Coloque um nome de usuário com pelo menos 3 caracteres';
        return;
    }
    if(strlen($nome) > 40){// definindo um limite de caracteres para nome de usuário
                            // dificultando códigos maliciosos
        echo 'O nome é muito extenso!';
        return;
    }
    if(!is_numeric($idade)){// verificando se a variavel é um número
        echo 'Neste Campo deve-se digitar um número!';
        return;
    }

    if($idade >= 6 && $idade <= 12){
        for( $i = 0; $i <= count($categorias); $i++ ){

            if($categorias[$i] == 'Infantil')
            {

                echo( "O nadador ".$nome." compete na categoria ".$categorias[$i]);
            }
        }

    }else if( $idade >= 13 and $idade <= 18){
        for( $i = 0; $i <= count($categorias); $i++ ){

            if($categorias[$i] == 'Adolescentes')
            {

                echo( "O nadador ".$nome." compete na categoria ".$categorias[$i]);
            }
        }

    }else{
        for( $i = 0; $i <= count($categorias); $i++ ){

            if($categorias[$i] == 'Adulto')
            {

                echo( "O nadador ".$nome." compete na categoria ".$categorias[$i]);
            }
        }

    }
?>