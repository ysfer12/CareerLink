<?php
namespace App\Models;

use App\Config\Database;
use PDO;
use PDOException;

class OffreModel {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connection();
    }

    public function create($titre, $description, $salaire, $localisation, $categorie_id, $tag_id, $date_publication) {
        $query = "INSERT INTO offer (titre, `description`, salaire, localisation, categorie_id, tag_id, date_publication) VALUES (:titre, :`description`, :salaire, :localisation, :categorie_id, :tag_id, :date_publication)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":titre", $titre);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":salaire", $salaire);
        $stmt->bindParam(":localisation", $localisation);
        $stmt->bindParam(":categorie_id", $categorie_id);
        $stmt->bindParam(":tag_id", $tag_id);
        $stmt->bindParam(":date_publication", $date_publication);

        try {
            if ($stmt->execute()) {
                return true;
            } else {
                $errorInfo = $stmt->errorInfo();
                throw new PDOException("Error executing query: " . $errorInfo[2]);
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}