<?php

if(!empty($_POST)) {

    try {
        switch ($_GET["form"]) {
            case 'mission':
                require('../model/Mission.php');
                $dataModel = new MissionModel();

                $dataModel->titre = $_POST["titre"];
                $dataModel->description =  $_POST["description"];
                $dataModel->nomcode = $_POST["nomcode"];
                $dataModel->pays = $_POST["pays"];
                $dataModel->typemission = $_POST["typemission"];
                $dataModel->statut = $_POST["statut"];
                $dataModel->sperec = $_POST["sperec"];
                $dataModel->datedebut = date("Y-m-d");
                if ((strval($_POST['statut']) == "Echec") or (strval($_POST['statut']) == "Terminée")) {
                    $dataModel->datefin = date("Y-m-d");
                } else $dataModel->datefin = NULL;
                $dataModel->create($dataModel);

                break;

            case 'agent':
                require('../model/Agent.php');
                $dataModel = new AgentModel();

                $dataModel->nom = $_POST["nom"];
                $dataModel->prenom =  $_POST["prenom"];
                $dataModel->naissance = $_POST["naissance"];
                $dataModel->codeid = $_POST["codeid"];
                $dataModel->nationalite = $_POST["nationalite"];
                $dataModel->specialite = $_POST["specialite"];
                $dataModel->missionid = $_POST["missionid"];

                $dataModel->create($dataModel);
                break;
                
            case 'cible':
                require('../model/Cible.php');
                $dataModel = new CibleModel();

                $dataModel->nom = $_POST["nom"];
                $dataModel->prenom =  $_POST["prenom"];
                $dataModel->naissance = $_POST["naissance"];
                $dataModel->nomcode = $_POST["nomcode"];
                $dataModel->nationalite = $_POST["nationalite"];
                $dataModel->missionid = $_POST["missionid"];

                $dataModel->create($dataModel);
                break;

            case 'contact':
                require('../model/Contact.php');
                $dataModel = new ContactModel();

                $dataModel->nom = $_POST["nom"];
                $dataModel->prenom =  $_POST["prenom"];
                $dataModel->naissance = $_POST["naissance"];
                $dataModel->codeid = $_POST["codeid"];
                $dataModel->nationalite = $_POST["nationalite"];
                $dataModel->missionid = $_POST["missionid"];

                $dataModel->create($dataModel);
                break;

            case 'planque':
                require('../model/Planque.php');
                $dataModel = new PlanqueModel();

                $dataModel->code = $_POST["code"];
                $dataModel->adresse =  $_POST["adresse"];
                $dataModel->pays = $_POST["pays"];
                $dataModel->type = $_POST["type"];
                $dataModel->missionid = $_POST["missionid"];

                $dataModel->create($dataModel);
                break;
            
            default:
                break;
        }
        
    }catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }

    header("Location: ../controller/adminData.php");

} else {
    header("Location: ../view/addView.php?form=$_GET[form]");

}