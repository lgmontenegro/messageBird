<?php
require __DIR__ . '/vendor/autoload.php';

$teste = new Messagebird\Http\Message();
echo $teste->getProtocolVersion();