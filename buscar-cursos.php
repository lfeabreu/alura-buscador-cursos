<?php

use GuzzleHttp\Client;

$client = new \GuzzleHttp\Client();
$resposta = $client->request('GET', 'http://alura.com.br/cursos-online-programacao/php');

$html = $resposta->getBody();


