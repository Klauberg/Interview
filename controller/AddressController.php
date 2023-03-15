<?php

class AddressController {
  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function addAddress($clientId, $street, $city, $state, $zip, $number, $complement) {
    // Insere um novo endereço no banco de dados
    $query = "INSERT INTO address (address_id, client_id, street, city, state, zip, number, complement) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("issssss", $clientId, $street, $city, $state, $zip, $number, $complement);
    $stmt->execute();
  }

  public function updateAddress($addressId, $street, $city, $state, $zip, $number, $complement) {
    // Atualiza os dados de um endereço no banco de dados
    $query = "UPDATE address SET street=?, city=?, state=?, zip=?, number=?, complement=? WHERE address_id=?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("ssssssi", $street, $city, $state, $zip, $number, $complement, $addressId);
    $stmt->execute();
  }

  public function deleteAddress($addressId) {
    // Deleta um endereço do banco de dados
    $query = "DELETE FROM address WHERE address_id=?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("i", $addressId);
    $stmt->execute();
  }

  public function getAddressesByClient($clientId) {
    // Lista todos os endereços de um cliente cadastrados no banco de dados
    $query = "SELECT * FROM address WHERE client_id=?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("i", $clientId);
    $stmt->execute();
    $result = $stmt->get_result();

    $addresses = array();
    while ($row = $result->fetch_assoc()) {
      $addresses[] = $row;
    }

    return $addresses;
  }
}
