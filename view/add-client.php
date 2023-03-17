<?php

require_once "../config/database.php";
require_once "../controller/ClientController.php";

// Verifica se o método da requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $birth = $_POST["birth"];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $phone = $_POST["phone"];

    // Cria uma instância do objeto ClientController passando a conexão como parâmetro
    $clientController = new ClientController($conn);
    // Chama o método addClient para adicionar um novo cliente ao banco de dados
    $result = $clientController->addClient($name, $birth, $cpf, $rg, $phone);

    // Verifica se o resultado da operação foi bem sucedido
    if ($result) {
        // Redireciona o usuário para a página inicial
        header("Location: index.php");
        exit();
    } else {
        // Se houver algum erro, exibe uma mensagem de erro
        echo "Erro ao cadastrar cliente.";
    }
}

?>
