<?php
class Offre{
    private $id;
    private $titre;
    private $description;
    private $salaire;
    private $localisation;
    private $categorie_id;
    private $tag_id;
    private $date_publication;
    private $archive_a;
    
    public function __construct($titre, $description, $salaire, $localisation, $categorie_id, $tag_id, $date_publication){
        $this->titre = $titre;
        $this->description = $description;
        $this->salaire = $salaire;
        $this->localisation = $localisation;
        $this->categorie_id = $categorie_id;
        $this->tag_id = $tag_id;
        $this->date_publication = $date_publication;
    }

    public function getTitre(){
        return $this->titre;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getSalaire(){
        return $this->salaire;
    }
    public function getLocalisation(){
        return $this->localisation;
    }
    public function getCategorieId(){
        return $this->categorie_id;
    }
    public function getTagId(){
        return $this->tag_id;
    }
    public function getDatePublication(){
        return $this->date_publication;
    }

    
}