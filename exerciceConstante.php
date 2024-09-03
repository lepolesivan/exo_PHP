<?php
    require 'partials/head.php';
?>
    <h1 class="text-center">Exercice Constante</h1>
<?php
    echo '<main class="ps-5">';
    //Exercice 1
    define('PI', 3.14159);
    echo '<p style= "color:red"> Exercice 1</p>';
    echo "<p>" . PI . "</p>";

    //Exercice 2
    define('LARGEUR' , 10);
    define('LONGUEUR' , 10);
    $resultat = LARGEUR * LONGUEUR;
    echo '<p style= "color:red"> Exercice 2</p>';
    echo "<p>$resultat</p>";

    //Exercice 3
    echo '<p style= "color:red"> Exercice 3</p>';
    echo __DIR__;

    //Exercice 4
    define('PREFIXE', 'Bonjour');
    $mot1 = 'tout';
    $mot2 = 'le';
    $mot3 = 'monde';
    echo '<p style= "color:red; margin-top: 4px"> Exercice 4</p>';
    echo PREFIXE . " $mot1 " . "$mot2 ". "$mot3";

    //Exercice 5
    define('SUJET', 'La France');
    $capitale = 'PARIS';
    echo '<p style= "color:red"> Exercice 5</p>';
    echo 'La ' . SUJET . " de la France est $capitale";

    //Exercice 6
    define('TAUX_TVA', 0.2);
    $prixHT = 20;
    $prixTTC = (1 + TAUX_TVA) * $prixHT;
    echo '<p style= "color:red"> Exercice 6</p>';
    echo "Le prix toutes taxes est $prixTTC";

    //Exerice 7
    define('EURO_VERS_USD', 1.2);
    $dollar = 10;
    $euros = $dollar * EURO_VERS_USD;
    echo '<p style= "color:red"> Exercice 7</p>';
    echo "Le prix en euro est de $euros euros";

    //Exercice 8
    define('SEUL', 10);
    $aleatoire = 15 ;
    if ($aleatoire > SEUL) {
        echo '<p style= "color:red"> Exercice 8</p>';
        echo "<p>$aleatoire est supérieur à " . SEUL . '</p>';
      }else{
        echo '<p style= "color:red"> Exercice 8</p>';
        echo "<p>$aleatoire est inférieur à " . SEUL . '</p>';
      }

    //Exercice 9
    define('URL_SITE', 'https://jujutsu-kaisen.fandom.com/fr');
    $page = '/wiki/Satoru_Gojo';
    echo '<p style= "color:red"> Exercice 9</p>';
    echo '<a style="text-decoration: none"; href="' . URL_SITE . "$page" . '">Gojo Satoru</a>';

    //Exerice 10
      define('AGE_LEGAL', 18);
      $age = random_int(0,99);
      if ($age >= AGE_LEGAL) {
        echo '<p style= "color:red"> Exercice 10</p>';
        echo "<p>T'as plus de " . AGE_LEGAL . 'ans mais je pense que tu le sais</p>';
      }else{
        echo '<p style= "color:red"> Exercice 10</p>';
        echo "<p>T'as moins de " . AGE_LEGAL . 'ans  mais je pense que tu le sais</p>';;
      }
      echo '</main>';
?>
<?php
    require 'partials/footer.php';
?>