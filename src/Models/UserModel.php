<?php
namespace App\Models;

use App\Classes\Role;
use App\Classes\Utilisateur;
use App\Config\Database;
use PDO;

class UserModel{
    private $conn;

    public function __construct() {
            $db = new Database();
            $this->conn = $db->connection();
    }

    public function findUserByEmailAndPassword($email, $mot_de_pass){
        $query = "SELECT utilisateur.id , utilisateur.email , utilisateur.mot_de_pass , role.id_role as role_id , role.titre as `role`
        FROM utilisateur join role on  role.id_role= utilisateur.id 
        where utilisateur.email = :email and utilisateur.mot_de_pass = :password";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $mot_de_pass);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if(!$row){
            return null;
        } else {
            $role = new Role($row["role_id"], $row["role"]);
            // Fix the parameter order here:
            return new Utilisateur(
                $row['id'],
                $row["email"],
                $role,  // role should be third parameter
                $row["mot_de_pass"]  // password should be fourth parameter
            );
        }
    }

}