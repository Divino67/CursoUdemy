<?php

function trataNome($name){

    if (!$name) {
        throw new Exception("Nenhum nome foi informado", 5);
    }

    echo ucfirst($name) . "<br>";

}
try {

    //trataNome("Joao");
    trataNome("");
} catch(Exception $e){

    echo $e->getMessage();
    echo $e->getCode();

} finally{
    echo "executou o bloco finally";
}



















