<?php

$data = array(
    "empresa"=>"Hcode treinamentos"
);


setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600 );

echo "ok";







