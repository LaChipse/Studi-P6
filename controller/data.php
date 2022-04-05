<?php

    switch ($_GET["form"]) {
        case 'Missions':
            require('../model/Mission.php');
            $dataModel = new MissionModel();
            $form = "mission";
            break;

        case 'Agents':
            require('../model/Agent.php');
            $dataModel = new AgentModel();
            $form = "agent";
            break;
            
        case 'Cibles':
            require('../model/Cible.php');
            $dataModel = new CibleModel();
            $form = "cible";
            break;

        case 'Contacts':
            require('../model/Contact.php');
            $dataModel = new ContactModel();
            $form = "contact";
            break;

        case 'Planques':
            require('../model/Planque.php');
            $dataModel = new PlanqueModel();
            $form = "planque";
            break;
        
        default:
            header("Location: ../controller/home.php");
            break;
    }

    $row_count = $dataModel->countVar();
    $count = $row_count['count'];

    if (!isset($_GET['page'])) {
        $page = 1;
    } else{
        $page = $_GET['page'];
    }
    
    $per_page  = 10;
    $offset = ($page - 1) * $per_page;
    
    $total_pages = ceil($count / $per_page);

    $data = $dataModel->findAll($per_page, $offset);
    require('../view/dataView.php');