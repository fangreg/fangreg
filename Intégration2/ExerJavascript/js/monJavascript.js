/**
 * Created by Shany on 2019-07-11.
 */

//Lire un nombre et afficher le carré et le cube de ce nombre.


var longueur;
var largeur;
var surface;

longueur = Number (prompt("Veuillez entrer la longueur svp:"));
largeur = Number(prompt("Veuillez entrer la largeur svp:"));

surface = longueur * largeur;

alert("La surface pour une largeur de: " + surface);


//CHapitre 2 --> IF

// On veut un programme SI l'utilisateur peut consommer de l'alcool.

var age;

age = Number(prompt("Veuillez entrez votre age svp:"));

if(age < 18)
{
     alert("Vous ne pouvez pas consommer");
}
else
{
    alert("Vous pouvez boire et être heureux!");
}

//Un si à plusieurs conditions

age2 = Number(prompt("Veuillez entrer votre âge, svp!"));

if(age2 < 15){
    alert("Vous ne pouvez pas boire!")
}

else if (age2 >= 15 & age2 < 18) {
    alert("On peut boire sous la supervision des parents.")
}

else if(age2 >= 18 && age2 < 30){
    alert("Paarrrrtayyyy!");
}

else if (age2 >= 30 && age2 < 50){
    alert("Occupez-vous de vos enfants!")
}

else{
    alert("AUTRE");
}

// && ET
//  || OU

var nom;
var age;
var Nbjoursvecus

nom = prompt("Entrez votre prénom:");
age= Number (prompt("Veuillez entrer votre âge:"));

Nbjoursvecus = age * 365;

alert("Vous avez vécu ce nombre de jours: " + Nbjoursvecus);

//EXERCICES DE IF - JE DOIS FAIRE ÇA PAS CERTAINE :(

var nombre1;
var nombre2;

nombre1= Number(prompt( "Veuillez entrer un premier nombre:"));
nombre2= Number (prompt("Veuillez entrer un deuxième nombre:"));

if(nombre1 > nombre2)
{
    alert("Voici le nombre le plus grand" + nombre1);

    //QUELQUE CHOSE NE FONCTIONNE PAS DANS LE BAS DE CE CODE

else{
    alert("Voici le nombre le plus grand" + nombre2);
}





