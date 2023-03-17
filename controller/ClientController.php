<?php

class ClientController {
    private $db;
  
    public function __construct($db) {
      $this->db = $db;
    }


    public function addClient($name, $birth, $cpf, $rg, $phone) {
      // Insere um novo cliente no banco de dados
      $query = "INSERT INTO client (name, birth, cpf, rg, phone) VALUES (?, ?, ?, ?, ?)";
      $stmt = $this->db->prepare($query);
      $stmt->execute([$name, $birth, $cpf, $rg, $phone]);
    }
    
    public function updateClient($id, $name, $birth, $cpf, $rg, $phone) {
      // Atualiza os dados de um cliente no banco de dados
      $query = "UPDATE client SET name=?, birth=?, cpf=?, rg=?, phone=? WHERE client_id=?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param("sssssi", $name, $birth, $cpf, $rg, $phone, $id);
      $stmt->execute();
    }
  
    public function deleteClient($id) {
      // Deleta um cliente do banco de dados
      $query = "DELETE FROM client WHERE client_id=?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param("i", $id);
      $stmt->execute();
    }
  
    public function getClientById($id) {
      // Busca as informações de um cliente pelo ID
      $query = "SELECT * FROM client WHERE client_id=?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param("i", $id);
      $stmt->execute();
      $result = $stmt->get_result();
  
      return $result->fetch_assoc();
    }
  
    public function getAllClients() {
      // Lista todos os clientes cadastrados no banco de dados
      $query = "SELECT * FROM client";
      $result = $this->db->query($query);
  
      $clients = array();
      while ($row = $result->fetch_assoc()) {
        $clients[] = $row;
      }
  
      return $clients;
    }
  }
  