<?php
    include_once './class/Paquet.php';

    $paquet = new Paquet();

    $paquet->initialiser();

    $paquet->distribuer();

    echo $paquet->J2[0];