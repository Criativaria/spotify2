<?php

if (!empty($_POST)) {
    $ftperfil = $_FILES['ftperfil'];
    $dir = "../imgsusers/perfil/";

    date_default_timezone_set('America/Sao_Paulo');

    $extensao = strtolower(substr($ftperfil['name'], -4));

    $novo_nome = date("Y.m.d-H.i.s") . $extensao;
    $email = $_POST['email'];
    $nome = $_POST['nome'];

    move_uploaded_file($ftperfil['tmp_name'], $dir . $novo_nome);

    $user =
        "<div>
            <img class='imguser' src='./imgsusers/perfil/$novo_nome' alt='foto do usuário'>
        </div>
        <div>
            <p class='nomeuser'>$nome</p>
        </div>";

    $caminho = "..\usuario.txt";

    if (file_put_contents($caminho, $user, FILE_APPEND)) {
        echo "<script> alert('Dados cadatrados com sucesso'); </script>";
        echo "<script>window.location.href = '../user.php'</script>";
    } else {
        echo "<script> alert('Erro ao cadastrar'); </script>";
    }
}
