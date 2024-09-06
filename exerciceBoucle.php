<?php
    require 'partials/head.php';
?>
    <h1 class="text-center">Exercice Boucle</h1>
<?php
echo '<main class="ps-5">';

    // Exercice 1
    echo '<p style= "color:red"> Exercice 1</p>';
    $i = 0;
    while($i<=20){ 
        if($i%2 == 0){
            echo"<p>" . $i . "</p>";
        }
        $i++;
    }

    // Exercice 2
    echo '<p style= "color:red"> Exercice 2</p>';
    $annee = 2000;
    while($annee < date('Y')){
        $annee++;
        echo "<ul><li>$annee</li></ul>";
    }

    // Exercice 3
    echo '<p style= "color:red"> Exercice 3</p>';
    $resultat = 0;
    do{
        echo "<p>$resultat</p>";
        $i = 3;
        $resultat+= $i;
    }while( $resultat < 30);

    // Exercice 4
    echo '<p style= "color:red"> Exercice 4</p>';
    $nombre = 2;
    for($i = 0; $i <= 10 ; $i++){
        $resultat = $nombre * $i;
        echo "<p style='display:inline'>$resultat </p>";
    }

    // Exercice 5
    echo '<p style= "color:red"> Exercice 5</p>';
    echo "<table border='1'><tbody>";
    for ($row = 1; $row <= 5; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 5; $col++) {
            echo "<td><p>($row,$col)</p></td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";

    // Exercice 6
    echo '<p style= "color:red"> Exercice 6</p>';
    $utilisateur = array(
        'prenom' => 'Allaan',
        'nom' => 'Salim',
        'email' => "<a href='#'>allaan.salim@lepoles.org</a>",
        'age' => 26
    );

    foreach($utilisateur as $indice => $element){
        echo "<p>$indice $element</p>";
    }

    //Exercice 7
    echo '<p style= "color:red"> Exercice 7</p>';
    $menuNav = array(
        'accueil' => '<a href="#">Acceuil</a>',
        'produits' => '<a href="#">Produits</a>',
        'contact' => '<a href="#">Contact</a>'
    );

    foreach($menuNav as $element){
        echo "<p>$element</p>";
    }

    //Exercice 8
    echo '<p style= "color:red"> Exercice 8</p>';
    echo '<table style="border: 1px solid black; padding: 20px;"><tbody">';
    for ($i = 1; $i <= 10; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= 10; $j++) {
            // random_int : genere un nombre entier aleatoire entre les valeurs passées en paramètres (1,100);
            $number = random_int(1, 100);
            // Ajoute un 0 devant les chiffres en dessous de 10;
            $zero = sprintf("%02d", $number);
            if($zero %2 == 0 ){
                echo "<td style='border: 2px solid black; padding: 5px; text-align: center; background-color: green'> $zero </td>";
            }else {
                echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'> $zero </td>";
            } 
        }
        echo '</tr>';
    }
    echo '</tbody></table>';

    // Exercice 9
    echo '<p style= "color:red"> Exercice 9</p>';
    $mois = ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre'];

echo '<table border="1" cellspacing="0" cellpadding="5">';

// Boucle pour chaque mois
for ($i = 0; $i < 12; $i++) {
    echo "<tr><th>$mois[$i]</th>";

    // Boucle pour les jours du mois (jusqu'à 31 jours)
    for ($j = 1; $j <= 31; $j++) {
        // Calcule le numéro du jour de la semaine pour le jour actuel
        $dayOfWeek = ($j - 1) % 7;

        // Appliquer le style rouge aux jours qui sont les 6e et 7e jours de chaque semaine
        if ($dayOfWeek == 5 || $dayOfWeek == 6) {
            echo "<td style='color: red;'>" . sprintf('%02d', $j) . "</td>";
        } else {
            echo "<td>" . sprintf('%02d', $j) . "</td>";
        }
    }

    echo '</tr>';
}

echo '</table>';

    //Exercice 10
    echo '<p style= "color:red"> Exercice 10</p>';
    $personnes = array(
        array(
            'prenom' => 'Vera',
            'nom' => 'Dos Santos',
            'age' => 25
        ),
        array(
            'prenom' => 'Sarah',
            'nom' => 'Ghobrial',
            'age' => 22
        ),
        array(
            'prenom' => 'Dupond',
            'nom' => 'de ligonnes',
            'age' => 90
        )
    );

    echo "<ol>";

    foreach ($personnes as $identite => $personne) {
        echo "<li>Personne " . ($identite + 1) . "</li>";
        echo "<ul>";
            foreach ($personne as $cle => $valeur) {
                echo "<li>$cle : $valeur</li>";
            }
        echo "</ul>";
    }

    echo "</ol>";
    echo '</main>';
?>
<?php
    require 'partials/footer.php';
?>