<?php
    require 'partials/head.php';
?>
    <h1 class="text-center">Exercice Arithmetique</h1>

<?php
echo '<main class="ps-5">';
    //Exercice 1
    echo '<p style= "color:red"> Exercice 1</p>';
    $a = 1;
    $b = 2;
    $addition = $a + $b;
    $soustraction = $a - $b;
    $multiplication = $a * $b;
    $division = $a / $b;
    $modulo = $a % $b;

    echo '<p>Le résulat d\'une addition entre $a et $b est:</p>' . $addition . '</br>';
    echo '<p>Le résulat d\'une soustraction entre $a et $b est:</p>' . $soustraction . '</br>';
    echo '<p>Le résulat d\'une multiplication entre $a et $b est:</p>' . $multiplication . '</br>';
    echo '<p>Le résulat d\'une division entre $a et $b est:</p>' . $division . '</br>';
    echo '<p>Le résulat d\'un modulo entre $a et $b est:</p>' . $modulo . '</br>';

    //Exercice 2
    echo '<p style= "color:red"> Exercice 2</p>';
    $a += $b;
    echo "<p>Dans une addition \$a est $a</p>";
    $a -= $b;
    echo "<p>Dans une soustraction \$a est $a</p>";
    $a *= $b;
    echo "<p>Dans une multiplication \$a est $a</p>";
    $a /= $b;
    echo "<p>Dans une division \$a est $a</p>";
    $a %= $b;
    echo "<p>Dans un modulo le résultat de \$a est $a</p>";

    //Exercice 3
    echo '<p style= "color:red"> Exercice 3</p>';
    $counter = 10;
    echo "<p>\$counter est égual à $counter</p>";
    ++$counter;
    echo "<p>Avec ++\$counter;(++ en préfixe) \$counter est maintenant égual à $counter</p>";
    $counter = 10;
    echo "<p>\$counter est égual à $counter</p>";
    --$counter;
    echo "<p>Avec --\$counter;(-- en préfixe) \$counter est maintenant égual à $counter</p>";

    //Exercice 4
    echo '<p style= "color:red"> Exercice 4</p>';
    $num = 10;
    echo "<p>\$num est égual à $num</p>";
    $num++;
    echo "<p>Avec \$num++;(++ en postfixe) \$num est maintenant égual à $num</p>";
    $num = 10;
    echo "<p>\$num est égual à $num</p>";
    $num--;
    echo "<p>Avec \$num--;(-- en postfixe) \$num est maintenant égual à $num</p>";

    //Exercice 5
    echo '<p style= "color:red"> Exercice 5</p>';
    $age = 26;
    echo "<p>\$age est égual à $age</p>";
    ++$age;
    echo "<p>$age Résultat après ++\$age</p>";
    --$age;
    echo "<p>$age Résultat après --\$age</p>";

    //Exercice 6
    echo '<p style= "color:red"> Exercice 6</p>';
    $note1 = 1;
    $note2 = 10;
    $note3 = 20;

    $resultat = ($note1 + $note2 + $note3)/ 3;
    echo "<p>Le résultat de ($note1 + $note2 + $note3)/ 3 est $resultat</p>";
    //J'ai pas réussie

    //Exercice 7
    echo '<p style= "color:red"> Exercice 7</p>';
    $total = 37;
    $total %= 2;

    if($total == 0){
        echo '<p>$total est paire</p>';
    }else{
        echo '<p>$total est impaire</p>';
    }
    
    //Exercice 8
    echo '<p style= "color:red"> Exercice 8</p>';
    $quantity = 5;
    $quantity += 3;
    $quantity -= 2;
    echo '<p>Après que l\'utlisateur est ajouté puis retiré des produit la quantité est de' . $quantity . '</p>';

    //Exercice 9
    echo '<p style= "color:red"> Exercice 9</p>';
    $kilometres = 100;
    $kilometres *= 0.621371;
    echo '<p>La valeur $kilometres est de 100km mais après convertion en miles le résultat est de ' . $kilometres . ' miles</p>';

    //Exerice 10
    echo '<p style= "color:red"> Exercice 10</p>';
    $score = 50;
    $score += 10;
    $score -= 5;
    echo '<p>La valeur de $score est a 50 mais après avoir ajouté puis retiré des point le score est de' . $score . '</p>';
echo '</main>';
?>
<?php
    require 'partials/footer.php';
?>