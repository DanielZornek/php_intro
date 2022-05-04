<?php 

//declare('strict_type=1');// checagem rígida de script
    function validacaoNome( string $nome ) : bool
    
    {
        
        if(empty($nome)){//verificando se está vazio
            set_erro_msg('O nome não pode ser vazio, por favor preencha-o novamente!');
            return false;
        }
        else if(strlen( $nome ) < 3 ){ //strlen vai verificar a quantidade de caracteres
        
            set_erro_msg('O nome não pode conter menos de 3 caracteres');
            return false;
        }
        else if(strlen($nome) > 40){// definindo um limite de caracteres para nome de usuário
                                // dificultando códigos maliciosos
        set_erro_msg('O nome não pode conter mais de 40 caracteres');
            return false;
        }
        return true;
    }

    function validacaoIdade( string $idade ) : bool
    {
        
         if(!is_numeric($idade)){// verificando se a variavel é um número
            set_erro_msg('Informe um número para idade');
            return false;
        }return true;
        
    }


    

?>