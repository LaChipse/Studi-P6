<?php
require_once('..//model/Model.php');

class CibleModel extends Model
{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $naissance;
    protected $nomcode;
    protected $nationalite;
    protected $missionid;

    public function __construct()
    {
        $this->table = 'cibles';
    }

    /**
    * Obtenir la valeur d'un parametres
    */ 
    public function __get($property)
    {
        return $this->$property;
    }

    /**
    * Définir la valeur d'un parametres
    */ 
    public function __set($property, $value)
    {
        $this->$property = $value;
    }
}