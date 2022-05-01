<?php

    session_start();

    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescentes';
    $categorias[] = 'adulto';

    // print_r(categorias) mostrando o array
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    
    //mostrando os atributos atribuídos das variáveis
    
    if(empty($nome)){//verificando se está vazio
        $_SESSION['mensagem de erro'] = ' O nome não pode ser vazio,por favor preencha!';
        header('location:index.php');
        return;
    }
    else if(strlen( $nome ) < 3 ){ //strlen vai verificar a quantidade de caracteres

        $_SESSION['mensagem de erro'] = 'O nome não pode conter menos de 3 caracteres';
        header('location:index.php');
        return;
    }
    else if(strlen($nome) > 40){// definindo um limite de caracteres para nome de usuário
                            // dificultando códigos maliciosos
        $_SESSION['mensagem de erro'] = 'O nome não pode conter mais de 40 caracteres';
        header('location:index.php');
        return;
    }
    else if(!is_numeric($idade)){// verificando se a variavel é um número
        $_SESSION['mensagem de erro'] = 'Informe um número para idade';
        header('location:index.php');
        return;
    }

    else if($idade >= 6 && $idade <= 12){
        for( $i = 0; $i <= count($categorias); $i++ ){

            if($categorias[$i] == 'infantil')
            {

                $_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
                header('location:index.php');
                return;
            }
        }

    }else if( $idade >= 13 and $idade <= 18){
        for( $i = 0; $i <= count($categorias); $i++ ){

            if($categorias[$i] == 'adolescentes')
            {

                $_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
                header('location:index.php');
                return;
            }
        }

    }else{
        for( $i = 0; $i <= count($categorias); $i++ ){

            if($categorias[$i] == 'adulto')
            {

                $_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
                header('location:index.php');
                return;
                
            }
        }

    }
?>