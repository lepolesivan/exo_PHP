<?php
    require 'partials/head.php';
    // Exercice 1
    $prenom = 'Julein';
    $nom = 'Defreitas';

    echo '<p style= "color:red"> Exercice 1</p>';
    echo '<p>' . $prenom . ' ' . $nom . '<p/>';
 
    // Exercice 2
    $phrase1 = 'Le ciel est';
    $phrase2 = 'bleu aujourd\'hui';
    echo '<p style= "color:red"> Exercice 2</p>';
    echo '<p>' . $phrase1 . ' ' . $phrase2 . '<p/>';

    //Exercice 3
    $mot1 = 'J\'aime';
    $mot2 = 'le';
    $mot3 = 'PHP';
    echo '<p style= "color:red"> Exercice 3</p>';
    echo '<p>' , $mot1 , ' ' , $mot2 , ' ' , $mot3 , '<p/>';

    //Exercice 4
    $texte = 'je vais';
    $texte .= ' à la plage';
    echo '<p style= "color:red"> Exercice 4</p>';
    echo '<p>' . $texte . '<p/>';

    //Exercice 5
    $citation = 'Il a dit : "Le PHP est fantastique"';
    echo '<p style= "color:red"> Exercice 5</p>';
    echo "<p>$citation</p>";

    //Exercice 6
    $mot = 'PHP';
    echo '<p style= "color:red"> Exercice 6</p>';
    echo "<p>le mot est : $mot</p>";

    //Exercice 7
    $nom = 'Privat';
    echo '<p style= "color:red"> Exercice 7</p>';
    echo "<p>Bonjour, $nom, bienvenue sur notre site!</p>";

    //Exercice 8
    $citation = 'la vie est belle';
    $citation .=', surtout quand on code en PHP!';
    echo '<p style= "color:red"> Exercice 8</p>';
    echo '<p>"' . $citation . '"</p>';

    //Exercice 9
    $a = 5;
    $b = 10;
    $resultat = $a + $b;
    echo '<p style= "color:red"> Exercice 9</p>';
    echo "<p>La somme de $a et $b est $resultat</p>";
?>

<?php
    require 'partials/footer.php';
?>