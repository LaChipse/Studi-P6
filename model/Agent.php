<?php
require_once('../model/Model.php');

class AgentModel extends Model
{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $naissance;
    protected $codeid;
    protected $nationalite;
    protected $specialite;
    protected $missionid;

    public function __construct()
    {
        $this->table = 'agents';
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