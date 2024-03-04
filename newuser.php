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
    <div class="newmusica">
        <img src="albums/Group 1 (1).png" alt="">

        <form class="newmusicaform" action="logicas/logicausuario.php" method="POST" enctype="multipart/form-data">

            <div class="divnameinput">
                <label for="ftperfil"> escolha a sua foto de perfil </label>
                <input type="file" id="ftperfil" name="ftperfil">
            </div>
            <div class="divnameinput">
                <label for="nome"> seu nome/nick </label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="divnameinput">
                <label for="email"> email </label>
                <input type="email" id="email" name="email">
            </div>
            <input class="button" type="submit" placeholder="enviar">
        </form>
    </div>
</body>

</html>