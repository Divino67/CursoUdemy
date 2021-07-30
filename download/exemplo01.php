<?php

$link = "https://www.unip.br/assets/img/logo/logo-unip.svg";

$content = file_get_contents($link);



$parse = parse_url($link);

$basename = (basename($parse["path"]));

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>


<img src="<?=$basename?>">





