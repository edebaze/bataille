<?php
    class Paquet {
        public $nombreCartes = 52;
        public $J1 = array();
        public $J2 = array();
        public $paquet = array();

        public function initialiser () {
            $paquet = array();
            $carte13 = array();

            for ($i = 2; $i<=14; $i++) {
                $carte13[$i] = $i;
            }

            for ($i=0; $i<4; $i++) {
                array_push($paquet, $carte13);
            }

            //echo 'Bien initialisé';

            $this->paquet = $paquet;

        }

        public function distribuer () {
            // INITIALISATION DES VARIABLES LOCALES
            $paquet = $this->paquet;
            $J1 = $this->J1;
            $J2 = $this->J2;
            $tableI = array();
            $tableJ = array();
            //echo 'INITIALISE <br>';

            // TRAITEMENT A EFFECTUER
                // Pour le joueur 1
            for($l=0; $l<26; $l++) {
                $test = true;

                while($test) {
                    $test = false;
                    $i = rand (0,3);
                    $j = rand (2,14);
                    for($k=0; $k < sizeof($tableI); $k++) {
                        if($tableI[$k] == $i && $tableJ[$k] == $j) {
                            $test = true;
                        }
                    }
                }

                // On envoie les valeurs dans $tableI/J
                array_push($tableI, $i);
                array_push($tableJ, $j);


                // On place la carte dans $J1
                    array_push($J1, $paquet[$i][$j]);

            }


                // Pour le joueur 2
            for($l=0; $l<26; $l++) {
                $test = true;

                while($test) {
                    $test = false;
                    $i = rand (0,3);
                    $j = rand (2,14);
                    for($k=0; $k < sizeof($tableI); $k++) {
                        if($tableI[$k] == $i && $tableJ[$k] == $j) {
                            $test = true;
                        }
                    }
                }

                // On envoie les valeurs dans $tableI/J
                array_push($tableI, $i);
                array_push($tableJ, $j);


                // On place la carte dans $J2
                array_push($J2, $paquet[$i][$j]);

            }



            // SAUVEGARDE DES VARIABLES GLOBALES
            $this->J1 = $J1;
            $this->J2 = $J2;
            $this->paquet = $paquet;

            //echo '<br> Bien distribué <br>';


        }


        public function noDoublon() {
                $tableI = array();
                $tableJ = array();
                $test = true;

                for($l=0; $l<26; $l++) {

                    while($test) {
                        $test = false;
                        $i = rand (0,3);
                        $j = rand (2,14);
                        for($k=0; $k < sizeof($tableI); $k++) {
                            if($tableI[k] == $i && $tableJ[$k] == $j) {
                                $test = true;
                            }
                        }
                    }

                    // On envoie les valeurs dans $tableI/J
                    array_push($tableI, $i);
                    array_push($tableJ, $j);


                    // On sort al carte du $paquet et on la place dans $J1
                    function __construct($joueur) {
                        $paquet = $this->paquet;

                        array_push($joueur, $paquet[$i][$j]);
                        unset($paquet[$i][$j]);
                    }
                }

        }
    }



