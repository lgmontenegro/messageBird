<?php
require __DIR__ . '/vendor/autoload.php';

$teste = new Messagebird\Http\Message();
echo $teste->getProtocolVersion();
var_dump($teste->getHeaders());