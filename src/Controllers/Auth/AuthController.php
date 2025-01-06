<?php
namespace App\Controllers\Auth;

use App\Classes\Utilisateur;
use App\Config\Database;
use App\Models\UserModel;
use PDO;
   
    class AuthController {
        public function login($email, $mot_de_pass) {
            $userModel = new UserModel();
            $user = $userModel->findUserByEmailAndPassword($email, $mot_de_pass);
            if ($user == null) {
                echo "user not found please check ...";
            } else {
                if ($user->getRole()->getTitle() == "Administrateur") {
                    header("Location:../admin/dashboard.php");
                } else if ($user->getRole()->getTitle() == "Candidat") {
                    header("Location:../candidate/home.php");
                } else if ($user->getRole()->getTitle() == "Recruteur") {
                    header("Location:../recruiter/home.php");
                }
            }
        }
    
        public function register($firstname, $lastname, $email, $password, $role) {
            $userModel = new UserModel();
            $userModel->register($firstname, $lastname, $email, $password, $role);
        }
    }