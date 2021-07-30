<?php


session_start();

//depois de verificar login e senha reinicia o ID da sessao

session_destroy();
session_regenerate_id();


echo session_id();


















