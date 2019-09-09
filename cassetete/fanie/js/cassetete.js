/** JQUERY créé par Fanie Grégoire Jeudi 5 septembre 2019 */
//

var premierClique = 0;
var premiereImageSRC;
var premiereImageID;
var deuxiemeImageSRC;
var deuxiemeImageID;

$(".img-fluid").click(function() {

    if (premierClique === 0){
        premiereImageID = this.id;
        premiereImageSRC = this.src;
        deuxiemeImageID = this.id;
        deuxiemeImageSRC = this.src;
        $(this).hide();
        $("#img1"+ premiereImageID).attr("src", deuxiemeImageSRC);

        // Je sais que c'est le premier clique
        // on enregistre le nom de l'image 1
        //on va cacher l'image 1

        premierClique = 1;
    }

    else {

        $("#img2"+ deuxiemeImageID).attr("src", premiereImageSRC);

        //je sais que c'est mon 2ième clique
        //on va enregistrer le nom de l'image 2
        // on va échanger les images
        premierClique = 0;
    }

});


//BOUTON RECOMMENCER - SHANY: Il fonctionne au DÉBUT du Casse-Tête mais pas quand on pèse sur les boutons. :/

$("#boutonRec").click(function() {
$("#img1").attr("src","img/pug5.gif");
$("#img2").attr("src", "img/pug7.gif");
$('#img3').attr("src", "img/pug3.gif");
$('#img4').attr("src", "img/pug1.gif");
$('#img5').attr("src", "img/pug4.gif");
$('#img6').attr("src", "img/pug9.gif");
$('#img7').attr("src", "img/pug6.gif");
$('#img8').attr("src", "img/pug2.gif");
$('#img9').attr("src", "img/pug8.gif");
//cacher la victoire - Pas réussis à faire.

});

//BOUTON VICTOIRE - Il faut faire 9 IF

$("#boutonTri").click(function() {
 if($("#img1").attr("src") === "img/pug1.gif"){}
     if($("#img2").attr("src") === "img/pug2.gif"){}
         if($("#img3").attr("src") === "img/pug3.gif"){}
             if($("#img4").attr("src") === "img/pug4.gif"){}
                 if($("#img5").attr("src") === "img/pug5.gif"){}
                     if($("#img6").attr("src") === "img/pug6.gif"){}
                         if($("#img7").attr("src") === "img/pug7.gif"){}
                             if($("#img8").attr("src") === "img/pug8.gif"){}
                                 if($("#img9").attr("src") === "img/pug9.gif"){}


    $('#img1').prepend("src","img/pugparty.jpeg"); // Je n'ai pas réussi à faire afficher l'image.
    $("body").prepend("<h1>VICTOIRE!</h1>"); // Fonctionne

});
