<?php

$timezone = new DateTimeZone('America/Sao_Paulo'); 
$agora = new DateTime('now', $timezone);

$horaMin = $agora->format('H')*60;
$min = $agora->format('i');

$minTotais = $horaMin + $min;

echo "\nSe passaram $minTotais minutos desde o começo do dia.\n\n";