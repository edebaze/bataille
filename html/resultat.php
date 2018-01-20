<?php

    if($paquet->J1[$tour] > $paquet->J2[$tour]) {

        array_push($paquet->J1, $paquet->J2[$tour]);
        array_push($paquet->J1, $paquet->J1[$tour]);
        $_SESSION['cartesJ1'] += 1;
        $_SESSION['cartesJ2'] -= 1;


        if($_SESSION['cartesJ2'] == 0) {
            echo '<div class="alert alert-dark"> Le joueur 1 remporte la partie</div>';
        } else {
            echo '<div class="alert alert-success"> Le joueur 1 gagne la manche</div>';
        }

    }

    if ($paquet->J1[$tour] < $paquet->J2[$tour]) {

        array_push($paquet->J2, $paquet->J1[$tour]);
        array_push($paquet->J2, $paquet->J2[$tour]);
        $_SESSION['cartesJ2'] += 1;
        $_SESSION['cartesJ1'] -= 1;

        if($_SESSION['cartesJ1'] == 0) {
            echo '<div class="alert alert-dark"> Le joueur 2 remporte la partie</div>';
        } else {
            echo '<div class="alert alert-danger"> Le joueur 2 gagne la manche</div>';
        }

    }

    if ($paquet->J1[$tour] == $paquet->J2[$tour]) {
        echo '<div class="alert alert-dark" role="alert"> Egalité </div>';
    }

    ?>

