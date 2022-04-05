<?php
    try{
        switch ($_GET["form"]) {
            case 'mission':
                require('../model/Mission.php');
                $dataModel = new MissionModel();
                break;

            case 'agent':
                require('../model/Agent.php');
                $dataModel = new AgentModel();
                break;
                
            case 'cible':
                require('../model/Cible.php');
                $dataModel = new CibleModel();
                break;

            case 'contact':
                require('../model/Contact.php');
                $dataModel = new ContactModel();
                break;

            case 'planque':
                require('../model/Planque.php');
                $dataModel = new PlanqueModel();
                break;
            
            default:
                header("Location: ../controller/adminData.php");
                break;
        }

    }catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }

    $data = $dataModel->delete($_GET["id"]); 
    header("Location: ../controller/home.php");