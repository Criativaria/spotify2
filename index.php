<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spotify2</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar sticky-top bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <div class="logodiv">
          <img class="logoimg " src="logopequena.png" alt="">
          <p style="color: aliceblue;">Spotify2</p>
        </div>
      </a>
      <?php

      if (file_get_contents('usuario.txt')) {
        echo '<a class="navbar-brand " href="user.php">
          <div class="navitem">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#F169CD" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
            </svg>
            <p style="color: #F169CD;">perfil</p>
          </div>
        </a>';
      } else {
        echo '<a class="navbar-brand " href="newuser.php">
          <div class="navitem">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#F169CD" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
            </svg>
            <p style="color: #F169CD;">criar conta</p>
          </div>
        </a>';
      }
      ?>
      <a class="navbar-brand" href="newsong.php">
        <div class="navitem">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
          </svg>
          <p>cadastrar música</p>
        </div>
      </a>
    </div>
  </nav>

  <main>
    <h1 class="boasvindas">Boas Vindas</h1>
    <div class="albumsemusicas">
      <h3 class="titulos">músicas</h3>

      <div class="musicas">
        <a class="link" href="https://open.spotify.com/track/2qyhy9ndo8tTGMzXeHTisR?si=lvsuiE1WT0iGwZh8K5D2OA" target="_blank">
          <div class="musicadiv">
            <img class="musicaimg" src="albums/Capas/Capas/dojacat.png" alt="">
            <p class="musicatexto">So High</p>
          </div>
        </a>
        <a class="link" href="https://open.spotify.com/track/5c8xnh0mSLl7V2UDViB8Ed?si=8BSb2Xu9TvOWtqmfx_WNfQ" target="_blank">
          <div class="musicadiv">
            <img class="musicaimg" src="albums/Capas/Capas/beauty.png" alt="">
            <p class="musicatexto">ESCORT</p>
          </div>
        </a>
        <a class="link" href="https://open.spotify.com/track/2K7xn816oNHJZ0aVqdQsha?si=y5HZUTJISlOxOJKjF9VFGw" target="_blank">
          <div class="musicadiv">
            <img class="musicaimg" src="albums/Capas/Capas/neighbourhood.png" alt="">
            <p class="musicatexto">Softcore</p>
          </div>
        </a>
        <a class="link" href="https://open.spotify.com/track/2QjOHCTQ1Jl3zawyYOpxh6?si=AYgzmLVcSXC7BbfmcbF_Jg" target="_blank">
          <div class="musicadiv">
            <img class="musicaimg" src="albums/Capas/Capas/sweather.png" alt="">
            <p class="musicatexto">Sweather Weather</p>
          </div>
        </a>
        <a class="link" href="https://open.spotify.com/track/0k4d5YPDr1r7FX77VdqWez?si=XHx8uPl7TMmuwkDvg0E0zA" target="_blank">
          <div class="musicadiv">
            <img class="musicaimg" src="albums/Capas/Capas/youright.png" alt="">
            <p class="musicatexto">You Right</p>
          </div>
        </a>
        <a class="link" href="https://open.spotify.com/track/1rWzYSHyZ5BiI4DnDRCwy7?si=6SgmWccjS_i24BHbM9uxdw" target="_blank">
          <div class="musicadiv">
            <img class="musicaimg" src="albums/Capas/Capas/luzdalua.png" alt="">
            <p class="musicatexto">moonligth</p>
          </div>
        </a>
        <a class="link" href="https://open.spotify.com/track/7nc7mlSdWYeFom84zZ8Wr8?si=gTa065aMRoOlleA-xMAR0g" target="_blank">
          <div class="musicadiv">
            <img class="musicaimg" src="albums/Capas/Capas/tellem.png" alt="">
            <p class="musicatexto">Tell em</p>
          </div>
        </a>
        <a class="link" href="https://open.spotify.com/track/3zIcvn5r3QGea6a4M36MQr?si=te7rtH7jRJSz98qWbD4JLQ" target="_blank">
          <div class="musicadiv">
            <img class="musicaimg" src="albums/Capas/Capas/vava.png" alt="">
            <p class="musicatexto">Valorant</p>
          </div>
        </a>
      </div>
      <h3 class="titulos">suas musicas</h3>
      <div class="musicas">

        <?php
        echo nl2br(file_get_contents("musica.txt"));
        ?>
      </div>
      <div class="albums">
        <h3 class="titulos">Álbuns e playlists</h3>
        <div class="divalbums">
          <a target="_blank" class="link" href="https://open.spotify.com/playlist/5MIM2a1f9bHJ6yW9q8Re8T?si=dc06cfc05bc04d07">
            <div class="album">
              <img class="albumimg" src="albums/soundtracks.jfif" alt="">
              <p class="albumtexto">soundtracks para programar</p>
            </div>
          </a>
          <a target="_blank" class="link" href="https://open.spotify.com/playlist/2Sh31rhttnqqA5uO268cEt?si=e2355f983c304009">
            <div class="album">
              <img class="albumimg" src="albums/levitate.jfif" alt="">
              <p class="albumtexto">levitate</p>
            </div>
          </a>
          <a target="_blank" class="link" href="https://open.spotify.com/playlist/79ZdZltH16uN0UY0nOaDrB?si=108ea9590f3a4453">
            <div class="album">
              <img class="albumimg" src="albums/lovesongs.jfif" alt="">
              <p class="albumtexto">lovesongs</p>
            </div>
          </a>
          <a target="_blank" class="link" href="https://open.spotify.com/intl-pt/album/66R0BPV3pIJCpOWjAc1MBD?si=CUdYJvpvSjWIjN2hBqpoVg">
            <div class="album">
              <img class="albumimg" src="albums/super.jfif" alt="">
              <p class="albumtexto">super</p>
            </div>
          </a>
          <a target="_blank" class="link" href="https://open.spotify.com/playlist/2ieDuIzaWYvLP7dacKkCCA?si=21f8cb49d51d4bce">
            <div class="album">
              <img class="albumimg" src="albums/taemo.jfif" alt="">
              <p class="albumtexto">emo</p>
            </div>
          </a>
          <a target="_blank" class="link" href="https://open.spotify.com/playlist/3yTUO34dj8NR27lScZRBo2?si=2d53e940c8ed4c9e">
            <div class="album">
              <img class="albumimg" src="albums/daybyday.jfif" alt="">
              <p class="albumtexto">day by day</p>
            </div>
          </a>
          <a target="_blank" class="link" href="https://open.spotify.com/intl-pt/album/0P3oVJBFOv3TDXlYRhGL7s?si=d314gLqdTNq9-e4wTV__4A">
            <div class="album">
              <img class="albumimg" src="albums/thewekend.jfif" alt="">
              <p class="albumtexto">The beauty behind the madness</p>
            </div>
          </a>
          <a target="_blank" class="link" href="https://open.spotify.com/intl-pt/album/4I8BEAiq1kPqRRlvWLTo5B?si=5xnre_OjQYqhzq58A4Wqiw">
            <div class="album">
              <img class="albumimg" src="albums/comecarumjardin.jfif" alt="">
              <p class="albumtexto">I need to start a garden</p>
            </div>
          </a>
          <a target="_blank" class="link" href="https://open.spotify.com/intl-pt/album/7fRrTyKvE4Skh93v97gtcU?si=diSIQLzeTlWdi-yitWQAbA">
            <div class="album">
              <img class="albumimg" src="albums/naosorripramim.jfif" alt="">
              <p class="albumtexto">dont smile at me</p>
            </div>
          </a>
          <a target="_blank" class="link" href="https://open.spotify.com/intl-pt/album/75sm9IEmN01J5MsyZr4Cw1?si=CuxKjc-2Q1WbTWWEyefgYg">
            <div class="album">
              <img class="albumimg" src="albums/melanie.jfif" alt="">
              <p class="albumtexto">after school</p>
            </div>
          </a>
        </div>
      </div>
    </div>

  </main>
</body>

</html>