<?php
require_once('../model/Model.php');

class ContactModel extends Model
{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $naissance;
    protected $codeid;
    protected $nationalite;
    protected $missionid;

    public function __construct()
    {
        $this->table = 'contacts';
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