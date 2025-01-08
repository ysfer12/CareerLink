<?php
namespace App\Controllers;
use App\Models\OffreModel;

class OffreController{
    public function create($titre,$description,$salaire,$localisation,$categorie_id,$tag_id,$date_publication){
        $offreModel = new OffreModel();
        $offreModel->create($titre,$description,$salaire,$localisation,$categorie_id,$tag_id,$date_publication);
    }
}