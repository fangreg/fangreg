<!DOCTYPE html>
<html lang="fr-ca">

<head>
    <meta charset="UTF-8">
    <title>Mes passions de cet été!</title>
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

<!--NAVIGATION-PHP-->

<?php
     include "header.php";
?>

<!--Carrousel-->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    ￼￼￼￼￼<ul class="carousel-indicators">
    ￼￼￼￼￼￼￼￼￼￼<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    ￼￼￼￼￼￼￼￼￼￼<li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
    ￼￼￼￼￼￼￼￼￼￼￼￼￼</ul>

    <div class="carousel-inner">
    ￼￼￼￼￼<div class="carousel-item active">
    ￼￼￼￼￼￼￼￼￼￼<img class="img-fluid" src="img/Baleine1920x1080.jpg" alt="Allez voir les Baleines!">
              <div class="carousel-caption">
              <h3>Les Baleines de Baie-Comeau</h3>
                  <p>Nous aimons toujours admirer ces merveilleux mamifères!</p>
              </div>
    ￼￼￼ </div>

        <div class="carousel-item">
    ￼￼￼￼￼￼￼￼￼￼<img class="img-fluid" src="img/BBQ.jpg" alt="Un BBQ">
            <div class="carousel-caption">
                <h3>Faire du bon BBQ!</h3>
                <p>C'est plus mon chum que moi qui s'en occupe, alors je vais apprendre. ;)</p>
            </div>
        </div>

    ￼￼￼￼  <div class="carousel-item">
             <img class="img-fluid" src="img/Chalet.jpg" alt="Un Chalet">
          <div class="carousel-caption">
            <h3>Passez du temps au Chalet</h3>
            <p>Nous aimons beaucoup aller au chalet de la mère de mon copain.</p>
          </div>
         </div>
    </div>

        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span>
</a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>

    <!--CARTE GOOGLE--->

<div class="container-fluid">
    <div class="row py-4 couleurbleu text-center">
        <div class=" col-xl-6 offset-xl-3 col-md-6 offset-xl-3 col-sm-6 offset-sm-3">
            <h1>Baie-Comeau</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83469.49858757315!2d-68.32122405176409!3d49.173581606769744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4c94099ff6256a2b%3A0x7f80a4113bb37945!2sBaie-Comeau%2C+QC!5e0!3m2!1sfr!2sca!4v1562524907643!5m2!1sfr!2sca" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-xl-4 col-md-4 col-md-4"></div>
    </div>
</div>

    <!-- FONT AWESOME-->

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-xl-4 col-md-6 col-sm-12 couleurbleu">
                <br><h1>Plage!</h1>
                <i class="fas fa-umbrella-beach fa-5x"></i>
                <br><br><p>Nous irons faire un peu de plage!</p>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 couleurjaune">
                <br><h1>Manger!</h1>
                <i class="fas fa-drumstick-bite fa-5x"></i>
                <br><br><p>Nous prévoyons manger du Poulet Frit!</p>
            </div>
            <div class="col-xl-4 col-md-12 col-sm-12 couleurbleu">
                <br><h1>Lecture!</h1>
                <i class="fas fa-book-open fa-5x"></i>
                <br><br><p>Je vais essayer de lire un livre!</p>
            </div>
        </div>
    </div>

<!-- FOOTER-->

<?php
 include "footer.php"
?>
￼￼￼
￼


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>