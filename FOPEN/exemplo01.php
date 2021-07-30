<?php

$file = fopen("log.txt", "w+");

fwrite($file, date("d/m/Y H:i:s"));

fclose($file);

echo "arquivo criado com sucesso";








