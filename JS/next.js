$(function () {

    var tour = 0;

    $('#submit').click(function(e) {

        e.preventDefault()


        // /////////////////////////////////////// //
        // //////// INITIALISATIONS ////////////// //
        // /////////////////////////////////////// //




        // //////////////////////////////////// //
        // //////// GESTION AJAX ////////////// //
        // //////////////////////////////////// //

        $(".plateau").load("./html/resultat.php", {
            tour : tour,

        });

        $(".plateau").html("<div class=\"alert alert-dark\">En attente de connexion ...</div>");




        tour += 1;

    })

})