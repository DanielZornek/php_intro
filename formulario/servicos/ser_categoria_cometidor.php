<?php

   function defineCategoriaCompetidor( string $nome, string $idade) : ?string
    {

        $categorias = [];
        $categorias[] = 'infantil';
        $categorias[] = 'adolescentes';
        $categorias[] = 'adulto';

        remove_msg_erro();
        if(validacaoNome($nome) && validacaoIdade($idade)){

            if($idade >= 6 && $idade <= 12){
                for( $i = 0; $i <= count($categorias); $i++ ){
        
                    if($categorias[$i] == 'infantil')
                    {
        
                        set_sucesso_msg("O nadador ".$nome." compete na categoria ".$categorias[$i]);
                        return null;
                    }
                }
        
            }else if( $idade >= 13 and $idade <= 18){
                for( $i = 0; $i <= count($categorias); $i++ ){
        
                    if($categorias[$i] == 'adolescentes')
                    {
        
                       set_sucesso_msg("O nadador ".$nome." compete na categoria ".$categorias[$i]);
                        return null;
                    }
                }
        
            }else{
                for( $i = 0; $i <= count($categorias); $i++ ){
        
                    if($categorias[$i] == 'adulto')
                    {
        
                       set_sucesso_msg("O nadador ".$nome." compete na categoria ".$categorias[$i]);
                        return null;
                        
                    }
                }
        
            }
        }else
        {
            remove_msg_sucesso();
            return obter_erro_msg();
        }
    }

?>