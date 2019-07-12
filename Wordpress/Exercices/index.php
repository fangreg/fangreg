<?php
echo "<strong>Hello World!</strong><br>";

$mois_de_lannee = 7 ;

echo 'Nous sommes le' . $mois_de_lannee . ' ieme mois de l\'année.';

//Variables
$mois_prochain = 8 ;
echo '<br>Et le mois prochain, nous serons le ';
echo $mois_prochain;
echo ' ième mois de l\'année.' ;

//Exercices sur les if / Conditions

if($mois_de_lannee >= 6 && $langue == 'français') {

    echo '<br>Nous sommes en été.';

}


elseif($mois_de_lannee >= 6 && $langue == 'anglais') {
    echo 'We are not in summer.';
}

else {
    echo 'Nous NE sommes PAS en été.';
}

//Boucle While

$nombre_de_ligne = 1 ;

while($nombre_de_ligne <= 10) {//TANT QUE

    echo  'La variable est égale à'. $nombre_de_ligne;
    echo 'Jaime les chats.<br>';
    $nombre_de_ligne ++; //Inécrément de 1
}

echo 'Ma boucle est finie.<br>';

//BOUCLE for

for($nombre_de_ligne = 1; $nombre_de_ligne <= 10; $nombre_de_ligne ++) {

    echo  'La variable est égale à'. $nombre_de_ligne;
    echo 'Jaime les chats.<br>';

}


?>







