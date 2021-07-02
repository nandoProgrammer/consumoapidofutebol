<?php

$ch = curl_init('https://api.api-futebol.com.br/v1/campeonatos');

curl_setopt_array($ch, [

    // -X:
    CURLOPT_CUSTOMREQUEST => 'GET',

    // -H:
    CURLOPT_HTTPHEADER => [
        'Authorization: Bearer live_4346ff26f7b93f9bb7addeba659dfc'
    ],

    CURLOPT_RETURNTRANSFER => 1,
]);

$resposta = json_decode(curl_exec($ch), true);

curl_close($ch);

print_r($resposta);
