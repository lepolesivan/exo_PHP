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
    //J'a pas réussi

    // Exercice 4
    echo '<p style= "color:red"> Exercice 4</p>';
    $nombre = 2;
    for($i = 0; $i < 10 ; $i++){
        $nombre * $i;
        echo "$nombre";
        break;
    }//J'a pas réussi

    // Exercice 5
    echo '<p style= "color:red"> Exercice 5</p>';
    echo '<table><tbody>';
    for($i = 0; $i<5 ; $i++){
        echo "<tr><th>$i<td>1<td>1<td>1<td></tr>";
    }
    echo '</table></tbody>';//J'a pas réussi

    // Exercice 6
    echo '<p style= "color:red"> Exercice 6</p>';
    $utilisateur = array(
        'prenom' => 'Allaan',
        'nom' => 'Salim',
        'email' => "<a hre='#'>allaan.salim@lepoles.org</a>",
        'age' => 26
    );

    foreach($utilisateur as $indice => $element){
        echo "<p>$indice $element</p>";
    }
    echo '</main>';
?>
<?php
    require 'partials/footer.php';
?>