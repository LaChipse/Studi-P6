<?php
require_once('../model/Model.php');

class AdminModel extends Model
{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $datecreated;
    protected $password;

    public function __construct()
    {
        $this->table = 'admin';
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