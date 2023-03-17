<?php
    // Inclui o arquivo de configuração
    require_once 'config/database.php';

    // Inclui o arquivo com as definições do layout
    require_once 'view/layout/app.php';

    // Verifica se a página foi definida na URL, senão define como home
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'home';
    }

    // Define o título da página com base na página atual
    switch ($page) {
        case 'create-client':
            $title = 'Cadastrar cliente';
            break;
        // incluir outros cases para outras páginas, se existirem
        default:
            $title = 'Página Inicial';
            break;
    }

    // Define o conteúdo da página com base na página atual
    ob_start();

    switch ($page) {
        case 'create-client':
            include "view/create-client.php";
            break;
        // incluir outros cases para outras páginas, se existirem
        default:
            echo '<h1>Bem-vindo!</h1>';
            echo '<p>Projeto de entrevista de emprego.</p>';
            break;
    }

    // Armazena o conteúdo na variável $content
    $content = ob_get_clean();

    // Injeta o conteúdo no layout e exibe a página
    include_once 'view/layout/app.php';
?>
