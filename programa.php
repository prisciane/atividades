<?php

$contagem = 0;
$chocolateB = 0;
$promoE = 0;
$promoB = 0;
$chocolateE = 0;

$chocolateB = $_POST["chocolateB"];
$chocolateE = $_POST["chocolateE"];

$contagem = 3;
while      ($contagem <= $chocolateE){
           $promoB =  $promoB + 1;
           $contagem = $contagem + 3;

}    
 
$contagem = 2;
while ($contagem <= $chocolateB){
           $promoE = $promoE + 1;
           $contagem = $contagem + 2;
}

$contagem = 5;
while      ($contagem <= $chocolateE + $chocolateB) {
           $promoB = $promoB + 1;
           $contagem = $contagem + 5;
}

     echo "A quantidade de chocolate E é ";                                                                                                                      	echo $chocolateE + $promoE; 
     echo "<br/>";
     echo "A quantidade de chocolate B é";                             	echo $chocolateB + $promoB;

?>
