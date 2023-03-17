<?php
    // inclusão do arquivo de configuração do banco de dados
    require_once "config/database.php";

    // inclusão do cabeçalho da página
    require_once "view/layout/header.php";

    // inclusão do conteúdo da página
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'home';
    }

    switch ($page) {
        case 'create-client':
            include "view/create-client.php";
            break;
        // incluir outros cases para outras páginas, se existirem
        default:
            include "view/home.php";
            break;
    }

    // inclusão do rodapé da página
    require_once "view/layout/footer.php";
?>
