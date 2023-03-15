<?php

// class Client {
//   private $db;

//   public function __construct($db) {
//     $this->db = $db;
//   }

//   public function create($name, $birth, $cpf, $rg, $phone) {
//     // Insere um novo cliente no banco de dados
//     $query = "INSERT INTO client (name, birth, cpf, rg, phone) VALUES (?, ?, ?, ?, ?)";
//     $stmt = $this->db->prepare($query);
//     $stmt->bind_param("sssss", $name, $birth, $cpf, $rg, $phone);
//     $stmt->execute();
//   }

//   public function getAll() {
//     // Lista todos os clientes cadastrados no banco de dados
//     $query = "SELECT * FROM client";
//     $result = $this->db->query($query);

//     $clients = array();
//     while ($row = $result->fetch_assoc()) {
//       $clients[] = $row;
//     }

//     return $clients;
//   }

//   public function update($id, $name, $birth, $cpf, $rg, $phone) {
//     // Atualiza os dados de um cliente no banco de dados
//     $query = "UPDATE client SET name=?, birth=?, cpf=?, rg=?, phone=? WHERE id=?";
//     $stmt = $this->db->prepare($query);
//     $stmt->bind_param("sssssi", $name, $birth, $cpf, $rg, $phone, $id);
//     $stmt->execute();
//   }

//   public function delete($id) {
//     // Deleta um cliente do banco de dados
//     $query = "DELETE FROM client WHERE id=?";
//     $stmt = $this->db->prepare($query);
//     $stmt->bind_param("i", $id);
//     $stmt->execute();
//   }
// }
