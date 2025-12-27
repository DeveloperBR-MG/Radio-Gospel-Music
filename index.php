<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Deividi Rodrigues">
<meta name="description" content="Radio Gospel Music - A melhor música gospel online. Ouça agora nossa rádio ao vivo com os maiores sucessos do gospel.">
<meta name="keywords" content="Rádio Gospel, Música Gospel, Rádio Online, Gospel Online, Música Cristã, Rádio Cristã, Gospel Hits, Rádio Evangélica, Música Evangélica, Streaming Gospel">
<meta property="og:image" content="gospel-music-img.png">
<meta property="twitter:image" content="gospel-music-img.png">
<meta property="og:title" content="Radio Gospel Music">
<meta property="twitter:title" content="Radio Gospel Music">
<meta property="og:description" content="A melhor música gospel online. Ouça agora nossa rádio ao vivo com os maiores sucessos do gospel.">
<meta property="twitter:description" content="A melhor música gospel online. Ouça agora nossa rádio ao vivo com os maiores sucessos do gospel.">
<meta property="busca:image" content="gospel-music-img.png">

<title>Radio Gospel Music</title>

<style>
body {
    margin: 0;
    min-height: 100vh;
    background: linear-gradient(135deg, #0f2027, #203a43);
    font-family: Arial, Helvetica, sans-serif;
    color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: background 0.6s ease;
}

/* LOGO */
.logo {
    margin-top: 20px;
    text-align: center;
}

.logo img {
    max-width: 300px;
}

/* PLAYER */
.player {
    width: 90%;
    max-width: 420px;
    background: rgba(0,0,0,.45);
    border-radius: 22px;
    padding: 25px;
    text-align: center;
    box-shadow: 0 12px 30px rgba(0,0,0,.6);
}

/* CAPA */
.cover img {
    max-width: 220px;
    border-radius: 18px;
    margin-bottom: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,.6);
}

/* BOTÃO */
.play-btn {
    width: 76px;
    height: 76px;
    border-radius: 50%;
    border: none;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 10px 25px rgba(0,0,0,.45);
    transition: transform .2s ease, box-shadow .2s ease;

    margin: 0 auto; /* 🔥 CENTRALIZA O BOTÃO */
}

.play-btn:hover {
    transform: scale(1.08);
    box-shadow: 0 15px 35px rgba(0,0,0,.6);
}

/* ÍCONE */
.play-icon {
    font-size: 34px;
    color: rgb(0,200,83);
    line-height: 1;
    position: relative;
    left: 2px; /* corrige o ▶ */
    transition: color .4s ease;
}
/* NOME DA MÚSICA */
.music-name {
    margin-top: 18px;
    font-size: 15px;
    font-weight: bold;
}

/* FOOTER */
.footer {
    margin-top: auto;
    width: 100%;
    padding: 10px;
    text-align: center;
    font-size: 13px;
    background: rgba(0,0,0,.45);
}
</style>
</head>

<body>

<div class="logo">
    <img src="logo.png">
    <h2>🎶 Tocando Agora</h2>
</div>

<div class="player">

    <div class="cover">
        <?php include __DIR__ . "/capa.php"; ?>
    </div>

    <!-- BOTÃO -->
    <button id="playPause" class="play-btn">
        <span id="playIcon" class="play-icon">▶</span>
    </button>

    <div class="music-name">
        <?php include __DIR__ . "/musica.php"; ?>
    </div>

</div>

<audio id="audio">
    <source src="https://stm2.srvif.com:8134/stream" type="audio/mpeg">
</audio>

<script>
const audio = document.getElementById('audio');
const icon = document.getElementById('playIcon');

document.getElementById('playPause').onclick = () => {
    if (audio.paused) {
        audio.play();
        icon.textContent = '❚❚';
    } else {
        audio.pause();
        icon.textContent = '▶';
    }
};
</script>

<script>
function updateBackgroundFromCover() {
    const img = document.getElementById('coverImage');
    if (!img || !img.complete) return;

    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');

    canvas.width = img.naturalWidth;
    canvas.height = img.naturalHeight;
    ctx.drawImage(img, 0, 0);

    const data = ctx.getImageData(0, 0, canvas.width, canvas.height).data;

    let r=0,g=0,b=0,c=0;
    for (let i=0;i<data.length;i+=40){
        r+=data[i];
        g+=data[i+1];
        b+=data[i+2];
        c++;
    }

    r=Math.floor(r/c);
    g=Math.floor(g/c);
    b=Math.floor(b/c);

    document.body.style.background =
        `linear-gradient(135deg,
        rgb(${r},${g},${b}),
        rgb(${Math.max(r-60,0)},${Math.max(g-60,0)},${Math.max(b-60,0)}))`;

    // ÍCONE com a cor do background
    icon.style.color = `rgb(${r},${g},${b})`;
}

setTimeout(updateBackgroundFromCover, 800);
</script>


<script>
function atualizarMusica() {
    fetch('musica.php?ts=' + Date.now()) // evita cache
        .then(response => response.json())
        .then(data => {
            document.getElementById('musica').textContent = data.musica;
            document.getElementById('capa').src = data.capa;

            atualizarFundo(data.capa);
        })
        .catch(err => console.error(err));
}

// primeira carga
atualizarMusica();

// atualiza a cada 10 segundos
setInterval(atualizarMusica, 10000);

function atualizarFundo(urlCapa) {
    document.body.style.background = `
        linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)),
        url(${urlCapa}) center / cover no-repeat
    `;
}


</script>



<footer class="footer">
    © 2025 Radio Gospel Music
</footer>

</body>
</html>
