<?php

    session_start();

    function set_sucesso_msg( string $mensagem) : void
    {
        $_SESSION['mensagem de sucesso'] = $mensagem;

    }

    function obter_sucesso_msg() : ?string //pode retornar string ou null graças ao ?
    {
        if (isset($_SESSION['mensagem de sucesso']))
        return $_SESSION['mensagem de sucesso'];

        return null;
    }

    function set_erro_msg( string $mensagem) : void
    {
        $_SESSION['mensagem de erro'] = $mensagem;

    }

    function obter_erro_msg() : ?string //pode retornar string ou null graças ao ?
    {
        if (isset($_SESSION['mensagem de erro']))
        return $_SESSION['mensagem de erro'];

        return null;
    }

    function remove_msg_sucesso() : void
    {
        if (isset($_SESSION['mensagem de sucesso']))
        unset($_SESSION['mensagem de sucesso']);
    }

    function remove_msg_erro() : void 
    {
        if (isset($_SESSION['mensagem de erro']));
        unset($_SESSION['mensagem de erro']);

    }
?>