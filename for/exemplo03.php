<?php 

for($i = date("Y"); $i >= date("Y") - 100; $i--){

echo $i . "<br>";

}




//três exemplos diferentes.

for ($tabuada = 0; $tabuada <=10; $tabuada++):
    echo "5 X $tabuada = " . $tabuada*5 . "<br>";
endfor;



$contador = 0;
for ($contador = 0; $contador <=10; $contador+=2):
    echo "o contador é: " .$contador ."<br>";
endfor;



?>