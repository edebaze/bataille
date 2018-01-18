<?php
    include_once './class/Paquet.php';

    $paquet = new Paquet();

    $paquet->initialiser();

    $paquet->distribuer();

    if($paquet->J1[0] > 10) {
        if($paquet->J1[0] == 11) {
            echo 'J';
        }
        if($paquet->J1[0] == 12) {
            echo 'Q';
        }
        if($paquet->J1[0] == 13) {
            echo 'K';
        }
        if($paquet->J1[0] == 14) {
            echo 'As';
        }
    } else {
        echo $paquet->J1[0];
    }


