<?php
namespace App\Models;

use App\Classes\Role;
use App\Classes\Utilisateur;
use App\Config\Database;
use PDO;

class UserModel {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connection();
    }

    public function findUserByEmailAndPassword($email, $mot_de_pass) {
        $query = "SELECT utilisateur.id, utilisateur.email, utilisateur.mot_de_pass, role.id_role as role_id, role.titre as `role`
                  FROM utilisateur
                  JOIN role ON role.id_role = utilisateur.id_role
                  WHERE utilisateur.email = :email AND utilisateur.mot_de_pass = :password";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $mot_de_pass);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (!$row) {
            return null;
        } else {
            $role = new Role($row["role_id"], $row["role"]);
            return new Utilisateur(
                $row['id'],
                $row["prenom"],
                $row["nom"],
                $row["email"],
                $row["mot_de_pass"],
                $role
            );
        }
    }

    public function register($firstname, $lastname, $email, $password, $roleTitle) {
        $roleQuery = "SELECT id_role FROM role WHERE titre = :roleTitle";
        $roleStmt = $this->conn->prepare($roleQuery);
        $roleStmt->bindParam(":roleTitle", $roleTitle);
        $roleStmt->execute();
        $roleRow = $roleStmt->fetch(PDO::FETCH_ASSOC);

        if (!$roleRow) {
            throw new Exception("Role not found");
        }

        $roleId = $roleRow['id_role'];

        $query = "INSERT INTO utilisateur (prenom, nom, email, mot_de_pass, id_role) VALUES (:firstname, :lastname, :email, :password, :roleId)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":firstname", $firstname);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":roleId", $roleId);
        $stmt->execute();
    }
}