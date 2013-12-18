<?php

$m1=0;
$m2=0;
$m3=0;
$media = 0;

$m1= $_POST["m1"];
$m2= $_POST["m2"];
$m3= $_POST["m3"];

$media =($m1 + $m2 + $m3);
echo "sua media da conta R$" . $media . "<br/>";

$mediaconsumo = $media / 2.50;
echo "sua media de consumo é " . $mediaconsumo . "m³ <br/>";

echo "A previsao da sua proxima conta com aumento da tarifa e de R$ " . ($mediaconsumo * 3.50);

?>
