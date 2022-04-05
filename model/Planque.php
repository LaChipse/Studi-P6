<?php

require_once('../model/Model.php');

class PlanqueModel extends Model
{
    protected $id;
    protected $code;
    protected $adresse;
    protected $pays;
    protected $type;
    protected $missionid;

    public function __construct()
    {
        $this->table = 'planques';
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