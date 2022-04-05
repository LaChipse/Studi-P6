<?php

require('../model/Mission.php');

$missionModel = new MissionModel();

$row_count = $missionModel->countVar();
$count = $row_count['count'];

if (!isset($_GET['page'])) {
    $page = 1;
} else{
    $page = $_GET['page'];
}

$per_page  = 10;
$offset = ($page - 1) * $per_page;

$total_pages = ceil($count / $per_page);

$missions = $missionModel->findAll($per_page, $offset);

require('../view/homeView.php');