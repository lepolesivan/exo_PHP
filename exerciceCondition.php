<?php
    require 'partials/head.php';
?>
    <h1 class="text-center">Exercice Condition</h1>
<?php
    echo '<main class="ps-5">';
echo '</main>';

    //Exercice 1
    echo '<p style="color: red">Exercice 1</p>';
    $age = 18;
    if($age >= 0 && $age <= 120 ){
        echo '<p>Tu es vivant, s\' est bien</p>';
    }else{
        echo '<p>T\'es quel genre de phantom?</p>';
    }

    //Exercice 2
    echo '<p style="color: red">Exercice 2</p>';
    $montant = 100;
    if($montant > 100){
        $montant /= 1.1;
        echo '<p>Le montante est de audessus de 100</p>';
    }elseif($montant >= 50 && $montant <= 100){
        $montant /= 1.5;
        echo '<p>Le montante est entre 50 et 100</p>';
    }else{
        echo '<p>Aucune réduction n\'est appliquée</p>';
    }

    //Exercice 3
    echo '<p style="color: red">Exercice 3</p>';
    $jour = 5;
    switch($jour){
        case 1:
            echo "<p>C'est la merde nous somme Lundi</p>";
        break;
        case 2:
            echo "<p>C'est mardi et t'es toujours dans la merde mais courage</p>";
        break;
        case 3:
            echo "<p>Tu commence à t'habitué s'est normale on est mercredi</p>";
        break;
        case 4:
            echo "<p>Jeudi courage</p>";
        break;
        case 5:
            echo "<p>S'est la fin de la semaine! Vendredi</p>";
        break;
        case 6:
            echo "<p>On faît la fête! Samedi</p>";
        break;
        case 7:
            echo "<p>Mdr, ce soir tu vas te rendre compte que tu bosse demain</p>";
        break;
        default:
            echo "<p>Il y a que 7 jours dans une semaines</p>";
        break;
    }

    //Exercice 4
    echo '<p style="color: red">Exercice 4</p>';
    $variable1 = 1;
    $variable2 = 1;
    if($variable1 === $variable2){
        echo '<p>Bien joué BG</p>';
    }

    //Exercice 5
    echo '<p style="color: red">Exercice 5</p>';
    $note1 = 0;
    $note2 = 0;
    $note3 = 0;
    $moyenne = ($note1 + $note2 +$note3)/3;
    if($moyenne >= 20){
        if($moyenne >= 10){
            echo "<p>bsahthek frère! moyenne:$moyenne</p>";
        }elseif($moyenne < 10 && $moyenne > 0){
            echo "<p>Bon courage! moyenne:$moyenne</p>";
        }else{
            echo "<p>😱😱😱</p>";
        }
    }

    //Exercice 6
    echo '<p style="color: red">Exercice 6</p>';
    $var;
    if(isset($var)){
        echo "<p>$var est définie.</p>";
    } else {
        echo "<p>$var n'est pas définie.</p>";
    }

    // Exercice 7
    echo '<p style="color: red">Exercice 7</p>';
    $nom;
    if(empty($nom)){
        echo '<p>Remplisser le champ svp, aller on sort les tracteurs</p>';
    } else {
        echo '<p>Le champ n\'est pas vide!</p>';
    }

    //Exercice 8
    echo '<p style="color: red">Exercice 8</p>';
    $nombre = 7;

    if ($nombre % 2 == 0) {
        echo "<p>$nombre est un nombre pair.</p>";
    } else {
        echo "<p>$nombre est un nombre impair.</p>";
    }

    //Exercice 9
    echo '<p style="color: red">Exercice 9</p>';
    $age = 45;

    if($age <= 12){
        echo "<p>Tu est un enfant (gros bébé va).</p>";
    } elseif($age > 12 && $age <= 18){
        echo "<p>Tu est un adolescent.</p>";
    } elseif ($age > 18 && $age <= 50) {
        echo "<p>Tu est un adulte (bientot la mort).</p>";
    } else {
        echo "<p>Tu est un enfant (mais que dans la tête).</p>";
    }

    //Exercice 10
    echo '<p style="color: red">Exercice 10</p>';
    $utiliseEmpreinteDigitale = true;
    $utiliseMotDePasse = false;
    
    if(!empty($utiliseEmpreinteDigitale) && !empty($utiliseMotDePasse)){
        if ($utiliseEmpreinteDigitale xor $utiliseMotDePasse) {
            echo "<p>Connexion réussie.</p>";
        } else {
            echo "<p>Connexion impossible : choisissez une seule méthode de connexion.</p>";
        }
    } else {
        echo "<p>Connexion impossible : choisissez une méthode de connexion.</p>";
    }
?>
<?php
    require 'partials/footer.php';
?>