<?php
require_once('../model/Model.php');

class MissionModel extends Model
{
    protected $id;
    protected $titre;
    protected $description;
    protected $nomcode;
    protected $pays;
    protected $typemission;
    protected $statut;
    protected $sperec;
    protected $datedebut;
    protected $datefin;

    public function __construct()
    {
        $this->table = 'missions';
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
