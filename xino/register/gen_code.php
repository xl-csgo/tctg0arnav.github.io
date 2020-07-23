<?php

$words = explode(" ", "DPS Dwarka");
$acronym = "";

foreach ($words as $w) {
  $acronym .= $w[0];
}

$numb = rand(100000,999999);

$code = $acronym . $numb;

echo $code;

?>