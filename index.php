<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <p>
<?php
//création du tableau month
$month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
 $month[7] = 'août'; //modification de la ligne 7
 echo $month[7]; //affichage de la ligne 7 du tableau month
?>
    </p>
  </body>
</html>
