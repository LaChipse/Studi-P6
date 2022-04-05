<?php

    require('../model/Mission.php');

    $missionModel = new MissionModel();
    $mission = $missionModel->find($_GET['id']);

    require('../view/onemissionView.php');
