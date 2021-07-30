<?php

$image = imagecreatefromjpeg(__DIR__ . "certificado.jpg");


$tileColor = imagecolorallocate($image,0,0,0);

$grey = imagecolorallocate($image,100,100,100);

imagestring($image, 5, 450,150, "CERTIFICADO", $tileColor);
imagestring($image, 5, 440,350, "Divanei Aparecido", $tileColor);
imagestring($image, 3, 440,370, utf8_decode("Concluído em: "). date("d-m-Y"), $tileColor);


header("Content-type: image" . '__DIR__' . ".jpeg");

imagejpeg($image, "certificado" . date("d-m-Y"). __DIR__ . ".jpg", 10);

imagedestroy($image);










