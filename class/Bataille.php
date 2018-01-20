<?php
    class Bataille {
        public $cartesJ1 = 26;
        public $cartesJ2 = 26;
        public $tour = 0;

        public function next() {
            echo '
                 <div class="zoneJeu">

                    <div class="J1">';

                           include_once './html/joueur1.php';

            echo '</div>
                    <div class="plateau">';

                            include_once './html/resultat.php';

            echo '
                  </div>
            
                    <div class="J2">';

                            include_once './html/joueur2.php';

            echo '     
                   </div>
                </div>
            ';
        }
    }