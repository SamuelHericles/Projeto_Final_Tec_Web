<?php
    //arquivo de configuração
    function load($namespace){//namespace é um caminho
        $namespace = str_replace("\\","/",$namespace);//substitui as barras de namespace
        $caminhoAbsoluto = __DIR__."/".$namespace.".php";

        return require_once $caminhoAbsoluto;
    }

    spl_autoload_register(__NAMESPACE__."\load");//registar que a função load eh um autoload,receber a constante namespace e concatenar na função
?>