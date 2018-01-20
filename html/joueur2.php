<?php

    if($paquet->J2[$tour] > 10) {
        if($paquet->J2[$tour] == 11) {
            echo 'J';
        }
        if($paquet->J2[$tour] == 12) {
            echo 'Q';
        }
        if($paquet->J2[$tour] == 13) {
            echo 'K';
        }
        if($paquet->J2[$tour] == 14) {
            echo 'As';
        }
    } else {
        echo $paquet->J2[$tour];
    }

    ?>