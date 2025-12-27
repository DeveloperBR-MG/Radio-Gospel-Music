<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    header("Content-Type: application/json; charset=UTF-8");
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
    $xml = simplexml_load_file('http://streaming.srvif.com/api/ODEzNCsw');
    echo $xml->musica_atual; // Mostra a música atual
    
    ?>
</body>
</html>