<?php

if (!empty($_POST)) {
    $capamsc = $_FILES['capamsc'];
    $dir = "../imgsusers/musicas/";

    date_default_timezone_set('America/Sao_Paulo');

    $extensao = strtolower(substr($capamsc['name'], -4));

    $novo_nome = date("Y.m.d-H.i.s") . $extensao;
    $linkmsc = $_POST['linkmsc'];
    $nomemsc = $_POST['nomemsc'];

    move_uploaded_file($capamsc['tmp_name'], $dir . $novo_nome);

    $musica =
        "<a class='link' href='$linkmsc' target='_blank'>
        <div class='musicadiv'>
          <img class='musicaimg' src='imgsusers/musicas/$novo_nome' alt='capa da musica'>
          <p class='musicatexto'>$nomemsc</p>
        </div>
      </a>";

    $caminho = "../musica.txt";

    if (file_put_contents($caminho, $musica, FILE_APPEND)) {
        echo "<script> alert('Dados cadatrados com sucesso'); </script>";
        echo "<script>window.location.href = '../index.php'</script>";
    } else {
        echo "<script> alert('Erro ao cadastrar'); </script>";
    }
}
