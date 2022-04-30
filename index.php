<?php

    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'Adolescentes';
    $categorias[] = 'Adulto';

    // print_r(categorias) mostrando o array
    $nome = 'Eduardo';
    $idade = 15;
    /*
    mostrando os atributos atribuídos das variáveis
    var_dump($nome);
    var_dump($idade);
    */

    if($idade >= 6 && $idade <= 12){
        for( $i = 0; $i <= count($categorias); $i++ ){

            if($categorias[$i] == 'infantil')
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