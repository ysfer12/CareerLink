<?php

namespace App\Classes;


class Utilisateur {
    public $id;
    public $email;
    public $mot_de_pass;
    public $role;
    public $created_at;
    public $updated_at;
    
    public function __construct($id, $email, $role,$mot_de_pass='', $created_at='', $updated_at='') {
            $this->id = $id;
            $this->email = $email;
            $this->role = $role;
            $this->mot_de_pass = $mot_de_pass;
            $this->created_at = $created_at;
            $this->updated_at = $updated_at;
    }


    public function getId() { return $this->id; }
    public function getRole() { return $this->role; }
    public function getEmail() { return $this->email; }
    public function getPassword() { return $this->mot_de_pass; }
    public function getCreatedAt() { return $this->created_at; }
    public function getUpdatedAt() { return $this->updated_at; }
    
}