<?php
header('Content-Type: application/json; charset=UTF-8');

$xml = simplexml_load_file("http://streaming.srvif.com/api/ODEzNCsw");

if (!$xml) {
    echo json_encode([
        'musica' => 'Ao vivo • Radio Gospel Music',
        'capa' => 'capa-padrao.jpg'
    ]);
    exit;
}

echo json_encode([
    'musica' => (string)$xml->musica_atual,
    'capa'   => !empty($xml->capa_musica) ? (string)$xml->capa_musica : 'capa-padrao.jpg'
]);
