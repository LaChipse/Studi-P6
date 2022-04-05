<?php

    require('../model/Admin.php');

    $adminModel = new AdminModel();

    session_start();

    try {

        $mail = $_POST['mail'];
        $mdp = $_POST['password'];

        $admin = $adminModel->findBy(array('mail' => $mail));

        if ( count($admin) > 0) {

            foreach ($admin as $row) {

                if ( crypt($mdp, $row['password']) == $row['password'] ) {
                    $_SESSION['user'] = TRUE;
                    header("Location: ../index.php");
                } else {
                    $_SESSION['user'] = FALSE;
                    header("Location: ../controller/login.php");
                }
            }
        } else {
            $_SESSION['user'] = FALSE;
            header("Location: ../controller/login.php");
        }

    } catch (PDOException $e) {
        die('echec : '.$e->getMessage());
    }