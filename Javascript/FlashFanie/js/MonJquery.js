/** JQUERY créé par Fanie Grégoire Samedi 24 août 2019 */

$('#flashID').css("position","relative");   //pour que Flash se positionne en X et Y

var compteur = 0;
$("#boutonGauche").click(function(){
    compteur = compteur -50;
    $('#flashID').css("left",compteur);  //Pour déplacer flash à 50px à partir de la gauche
});

//Flash bouge à droite

var compteur = 0;
$("#boutonDroite").click(function(){
    compteur = compteur +50;
    $('#flashID').css("left",compteur);  //Pour déplacer flash à 50px à partir de la gauche
});

//Changez l'image de Flash1 à Flash 2 et vice-versa (une fois).

$('#boutonChangerImage').click(function(){
        var nomimage;

        nomimage = $('#flashID').attr("src");
         if(nomimage === "img/flash.jpg") {
                 $('#flashID').attr("src", "img/flash2.jpg");
         }
         else
                 $('#flashID').attr("src", "img/flash.jpg");
});

//FADE OUT//

$("#boutonEnleverImage").click(function(){
        $('#flashID').fadeOut();
});

//FADE IN//

$("#boutonAjouterImage").click(function(){
        $('#flashID').fadeIn();
});

//Ajoutez un attribut alt à votre image avec la description 'photo de Flash'//

$("#boutonAjouterAttribut").click(function () {
    $('#flashID').attr('alt','Photo de Flash');
});


//Ajoutez un titre en H1 'FLASH JQUERY' dans le haut de cette page avant la photo (before)//
$("#boutonAjouterTitre").click(function(){
        $("body").prepend("<h1>FLASH JQUERY</h1>");
});

//Flash est tellement rapide, ajoutez une autre image à côté de Flash à tous les cliques sur ce bouton!
// DUPLIQUER PLUSIEURS METHODES appendprepend//
$("#boutonDupliquer").click(function () {
    $('#flashID').clone().prependTo ('body');
});

//Flash ralentit, enlevez une image!(SUPPRIME DES IMAGE)//
$("#boutonRalentir").click(function () {
    $('#flashID').remove();
});

//Flash se téléporte sous ces boutons et retourne en haut lorsque l'on clique de nouveau//

//Flash doit apparaître et disparaître toutes les 500MS pendant 5 secondes.//
$("#boutonVitesseSupreme").click(function() {
    var myVar = setInterval(disparaitreFlash, 2000);
});

//Ce bouton fait afficher une image d'explosion dans l'écran et enlève tout le reste (boutons images, etc).//
$("#boutonNuke").click(function() {
    $( '#flashID',).hide();
    $('#boutonVitesseSupreme').hide();
    $('#boutonNuke').hide();
    $('#boutonTeleport').hide();
    $('#boutonRalentir').hide();
    $('#boutonAjouterTitre').hide();
    $('#boutonDroite').hide();
    $('#boutonAjouterAttribut').hide();
    $('#boutonChangerImage').hide();
    $('#boutonGauche').hide();
    $('#boutonEnleverImage').hide();
    $('#boutonAjouterImage').hide();
    $('#boutonDupliquer').hide();
    $("#flashID").append("img/atomic_bomb.jpg");
});