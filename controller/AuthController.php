<?php

class AuthController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
        session_start();
    }

    public function login($username, $password) {
        // Verifica as credenciais do usuário no banco de dados
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Credenciais válidas, inicia a sessão do usuário
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                return true;
            }
        }
        return false;
    }

    public function logout() {
        // Finaliza a sessão do usuário
        session_unset();
        session_destroy();
    }

    public function isLoggedIn() {
        // Verifica se o usuário está autenticado
        return isset($_SESSION['user_id']) && isset($_SESSION['username']);
    }

    public function getUserId() {
        // Retorna o ID do usuário autenticado
        return isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    }
}
