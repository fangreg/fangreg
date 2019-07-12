<!DOCTYPE html>
<html lang="fr-ca">

<head>
    <meta charset="UTF-8">
    <title>Contactez-moi</title>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="css/MonCSS.css" type="text/css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Referencement-->

    <meta name="description" content="Une page à propos des vacances de l'été 2019 de Fanie Grégoire">
    <meta name="keywords" content="Plage Chalet Vacances Été BBQ Québec 2019 Lecture Soleil Pause Montréal Baie-Comeau Baleine
Lac Eau Rivières Nature Bateau Côte-Nord Repos Route Voiture Transport">
    <meta name="author" content="Fanie Grégoire">

</head>
<body>

<?php
     include "header.php";
?>

<!--PARALLAX-->

<div class="container-fluid parallax">
    <div class="row text-center">
        <div class="col-xl-12 col-md-12 col-sm-12 pt-2">
            <h1>Coucou!</h1>
            <br><p class="p-4">Vous devriez me contacter!
        </div>
    </div>
</div>

<!--TEXTE D'INTRO-->

<div class="container-fluid fondpiscine">
<div class="row text-center">
    <div class="offset-xl-1 col-xl-10">
        <h1>Contactez-moi, via ce formulaire!</h1>
    </div>
</div>


    <!--FORMULAIRE-->

<form>
<div class="row">
        <div class="form-group col-xl-4">
        <input type="text" class="form-control" id="nom" placeholder="Entrer votre nom ici">
        </div>

    <div class="form-group col-xl-4">
        <input type="text" class="form-control" id="nom2" placeholder="Entrer votre nom de famille ici">
    </div>

    <div class="form-group col-xl-4">
        <input type="tel" class="form-control" id="telephone" placeholder="Entrer votre téléphone ici">
    </div>
</div>
</form>
    <!--Calendrier-->
<form>
    <div class="row">
        <div class="form-group col-xl-12">
            <input type="date" class="form-control" id="date" placeholder="Date de départ">
        </div>
    </div>
</form>

<!--Liste déroulante avec Container-->

    <div class="form-group">
        <label for="exampleFormControlSelect1">Vous me contactez pour quelle raison?:</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Je veux de tes nouvelles.</option>
            <option>Tu me dois de l'argent.</option>
            <option>Je t'ai stalké sur Facebook.</option>
            <option>Je crois avoir retrouvé ton chat.</option>
            <option>Aucune de ces options.</option>
        </select>
    </div>


<!--Question avec Texte long-->

<form>
    <div class="container">
<div class="form-group col-xl-10 offset-md-1 col-md-7 offset-sm-1 col-sm-7">
    <label for="ExempleTexteLong">Veuillez écrire un texte long, svp:</label>
    <textarea class="form-control" id="ExempleTexteLong" rows="3"></textarea>
   </div>
</div>
</form>

<!--Bouton Radio-->

    <div class="form-check text-center">
            <input class="form-check-input" type="radio" name="exempleradio" id="exempleradio"
                   value="option1" checked>
            <label class="form-check-label" for="exempleradio">
                Urgent
            </label>
        </div>

    <div class="form-check text-center">
        <div class="form-check">
                <input class="form-check-input" type="radio" name="exempleradio" id="exampleradios1" value="option2">
                <label class="form-check-label" for="exampleradios1">Important</label>
            </div>
        </div>

    <div class="form-check text-center">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exempleradio" id="bouton3" value="option3">
            <label class="form-check-label" for="bouton3">Peut attendre après mes vacances.</label>
        </div>
        </div>


<!--Bouton Envoyer-->
<div class="container-fluid p-4 text-center">
<div class="form-row col-xl-12 col-md-12 col-sm-12"></div>
    <form action="FormulaireEnvoye.php"><input type="submit" value="Envoyer"></form></div>

</div>

<form action="FormulaireEnvoye.php"></form>
</div>


<!--PARALLAX-->

<div class="container-fluid parallax2">
    <div class="row text-center">
        <div class="col-xl-12 col-md-12 col-sm-12">
            <h2 class="align-text-bottom">Bon été!</h2>
        </div>
    </div>
</div>

<!-- FOOTER-->

<?php
include "footer.php"
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>