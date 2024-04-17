<?php
$jsonDischi = file_get_contents('../assets/json/dischi.json');
header('content-type: applications/json');

echo $jsonDischi;
