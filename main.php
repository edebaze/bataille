<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Encodage pour les accents -->
        <meta charset="UTF-8">

        <!-- Titre de la Page -->
        <title>Javascript | Multiples Formulaires</title>

        <!-- Pour Internet Explorer : S'assurer qu'il utilise la dernière version du moteur de rendu -->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Affichage sans zoom pour les mobiles -->
        <meta name="viewport" content="width=device-width, init-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!--  Font Awesome | Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- HTML5 Shiv & Respond JS -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha256-3Jy/GbSLrg0o9y5Z5n1uw0qxZECH7C6OQpVBgNFYa0g=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js" integrity="sha256-g6iAfvZp+nDQ2TdTR/VVKJf3bGro4ub5fvWSWVRi2NE=" crossorigin="anonymous"></script>
        <![endif]-->

        <!-- Lien CSS -->
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>

        <?php
            include_once './php/initialisationPaquet.php';
            $tour = 0;
        ?>

        <div class="score">
            <?php
                echo 'Tour : ' . $tour;
                echo '<br> Cartes Joueur 1 : ' . $_SESSION['cartesJ1'];
                echo '<br> Cartes Joueur 2 : ' . $_SESSION['cartesJ2'];
            ?>
        </div>


        <div class="zoneJeu">

            <div class="J1">
                <?php
                   include_once './html/joueur1.php';
                ?>
            </div>

            <div class="plateau">
                <?php
                    include_once './html/resultat.php';
                ?>
            </div>

            <div class="J2">
                <?php
                    include_once './html/joueur2.php';
                ?>
            </div>

        </div>

        <div class="zoneCommandes">
            <form id="form" action="#" method="POST">
                <input type="submit" value="NEXT" class="btn btn-primary" id="submit">
            </form>
        </div>







        <!-- jQuery CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- AJAX -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

        <!-- Inclusion des fichiers JS -->
        <script src="./js/next.js"></script>

    </body>

</html>
