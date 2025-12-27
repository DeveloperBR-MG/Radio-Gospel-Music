<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

  $xml = simplexml_load_file("http://streaming.srvif.com/api/ODEzNCsw");


$musica = trim((string)$xml->musica_atual);



switch ($musica) {
    case 'Josué Freitas - João 20 + Pra Sempre':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-1.jpg' width='200' alt='Capa da Música 1' crossorigin='anonymous'>";
        break;

    case 'Julliany Souza - Canção Que Não Envelhece':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-2.jpg' width='200' alt='Capa da Música 2' crossorigin='anonymous'>";
        break;

    case 'Lindo Momento - Julliany Souza':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-3.jpg' width='200' alt='Capa da Música 3' crossorigin='anonymous'>";
        break;

    case 'Me Atraiu - Gabriela Rocha':
         echo "<img id='coverImage' src='capas-musicas/capa-musica-4.jpg' width='200' alt='Capa da Música 4' crossorigin='anonymous'>";
        break;

    case 'Portões Celestiais - Rose Nascimento':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-5.jpg' width='200' alt='Capa da Música 5' crossorigin='anonymous'>";
        break;

    case 'Quem É Esse - Julliany Souza':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-6.jpg' width='200' alt='Capa da Música 6' crossorigin='anonymous'>";
        break;

    case 'Terremoto - Gisele Nascimento ft. Michelle Douglas e Wilian Nascimento':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-7.jpg' width='200' alt='Capa da Música 7' crossorigin='anonymous'>";
        break;
    
    case 'Tudo É Perda - Felipe Rodrigues':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-8.jpg' width='200' alt='Capa da Música 8' crossorigin='anonymous'>";
        break;

    case 'Gabriel Brito, Matheus Trindade - Portões Celestiais (Ao Vivo)':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-9.jpg' width='200' alt='Capa da Música 9' crossorigin='anonymous'>";
        break;
    
    case 'Uma Nova Historia - Fernandinho':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-10.jpg' width='200' alt='Capa da Música 10' crossorigin='anonymous'>";
        break;

    case 'Ainda que a Figueira - Fernandinho':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-11.jpg' width='200' alt='Capa da Música 11' crossorigin='anonymous'>";
        break;
    case 'Caia Fogo do Céu - Fernandinho':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-12.jpg' width='200' alt='Capa da Música 12' crossorigin='anonymous'>";
        break;

    case 'Maranata - Ministério Avivah, Fernanda Madaloni':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-13.jpg' width='200' alt='Capa da Música 13' crossorigin='anonymous'>";
        break;

     case 'Deus da Graça - Bruna Karla, Gabriela Rocha':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-14.jpg' width='200' alt='Capa da Música 14' crossorigin='anonymous'>";
        break;

    case 'Vai Valer A Pena - Livres Para Adorar':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-15.jpg' width='200' alt='Capa da Música 15' crossorigin='anonymous'>";
        break;

    case 'A Casa É Sua - Casa Worship':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-16.jpg' width='200' alt='Capa da Música 16' crossorigin='anonymous'>";
        break;

     case 'Tudo Podes - Davi Sacer':
        echo "<img id='coverImage' src='capas-musicas/capa-musica-17.jpg' width='200' alt='Capa da Música 17' crossorigin='anonymous'>";
        break;

    default:
       echo "<img id='coverImage' src='capas-musicas/capa-padrao.jpg' width='200' alt='Capa padrão' crossorigin='anonymous'>";
}
    
    ?>
</body>
</html>