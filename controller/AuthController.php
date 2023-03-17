<?php

class AuthController {
    private $db;

    public function __construct($db) {
        // Construtor da classe AuthController que recebe uma conexão com o banco de dados ($db) e inicia a sessão do usuário
        $this->db = $db;
        session_start();
    }

    public function login($username, $password) {
        // Método que verifica as credenciais do usuário no banco de dados
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // Se encontrou um usuário com o nome de usuário informado
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Se a senha informada é válida, inicia a sessão do usuário com as informações do usuário encontrado
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                return true;
            }
        }
        // Caso contrário, retorna false para indicar que o login não foi bem sucedido
        return false;
    }

    public function logout() {
        // Método que finaliza a sessão do usuário, removendo todas as variáveis de sessão
        session_unset();
        session_destroy();
    }

    public function isLoggedIn() {
        // Método que verifica se o usuário está autenticado, verificando se as variáveis de sessão user_id e username estão definidas
        return isset($_SESSION['user_id']) && isset($_SESSION['username']);
    }

    public function getUserId() {
        // Método que retorna o ID do usuário autenticado, se houver um usuário autenticado, ou null caso contrário
        return isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    }
}
