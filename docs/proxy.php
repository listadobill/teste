<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/plain"); // Define o tipo de conteúdo como texto
echo file_get_contents("http://jmrk.xyz:8880/get.php?username=scott_olson@hotmail.com&password=2p7Ks4SPxP&type=m3u");
?>
