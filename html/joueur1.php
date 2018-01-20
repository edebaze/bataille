<?php

    if($paquet->J1[$tour] > 10) {
        if($paquet->J1[$tour] == 11) {
            echo 'J';
        }
        if($paquet->J1[$tour] == 12) {
            echo 'Q';
        }
        if($paquet->J1[$tour] == 13) {
            echo 'K';
        }
        if($paquet->J1[$tour] == 14) {
            echo 'As';
        }
    } else {
        echo $paquet->J1[0];
    }


