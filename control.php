<?php

$ch = curl_init('https://repo.packagist.org/packages.json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CAINFO, __DIR__ . '/cacert.pem');
var_dump(strlen(curl_exec($ch)));
