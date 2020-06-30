<?php

$strl= "La maîtrise desfondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.";

echo "<p>la chaine $strl contient" . strlen($strl) . "caractère </p>";
echo "<p>la chaine $strl contient" . str_world_count($strl) . "mots </p>";
echo "<p>" . strlower ($strl) . "</p>";
echo "<p>" . strloupper ($strl) . "</p>";
echo "<p>" . str_replace ("la" ,"La",$strl) . "</p>";
echo "<p>" . preg_replace ("est un avantage serieux et utile", $strl) . "</p>"
?>
