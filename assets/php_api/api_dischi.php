<?php
$jsonDischi = file_get_contents('../json/dischi.json');
$arrayDischi = json_decode($jsonDischi, true);
header('content-type: applications/json');

echo $jsonDischi;
