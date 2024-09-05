<?php

    require 'partials/head.php';
?>
    <h1 class="text-center">Exercice Tableau</h1>
<?php
    echo '<main class="ps-5">';

    //Exercice 1
    $filmsPreferes = array('Inception', 'Le Seigneur des Anneaux', 'Interstellar', 'Gladiator', 'Matrix');
    var_dump($filmsPreferes);

    echo "<h3>Liste de mes films préférés :</h3>";

    //Exercice 2
    echo '<p style="color: red">Exercice 2</p>';
    $fruit = ['pomme', 'fraise', 'kiwi'];
    echo '<p>Mon tableau contient ' . print_r($fruit) . '</p>';
    $fruit[] = 'mangue'; //Ajout d'un fruit
    echo '<p>Après avoir ajouter un fruit mon tableau contient ' . print_r($fruit) . '</p>';
    array_shift($fruit);
    echo '<p>Après avoir supprimer le premier un fruit mon tableau contient ' . print_r($fruit) . '</p>';

    //Exercice 3
    echo '<p style="color: red">Exercice 3</p>';
    $utilisateur = array(
        'prenom' => 'Julien',
        'nom' => 'Dos santos',
        'age' => 90
    );
    echo '<p>' . $utilisateur['prenom'] . ' ' . $utilisateur['nom'] . ' est un de vieux de ' . $utilisateur['age'] . ' ans</p>';

    //Exercice 4
    echo '<p style="color: red">Exercice 4</p>';
    $ville = ['Meulan', 'Paris', 'Poissy'];
    echo '<p>Mon tableau contient ' . sizeof($ville) . '</p>';
    echo '<p>Mon tableau contient ' . count($ville) . '</p>';

    //Exercice 5
    echo '<p style="color: red">Exercice 5</p>';
    $classe = array(
        0 => array(
            'prenom' => 'Julien',
            'nom' => 'Defreitas',
            'note' => 19.5
        ),
        1 => array(
            'prenom' => 'Sarah',
            'nom' => 'Marion',
            'note' => 100
        ),
        2 => array(
            'prenom' => 'Abdou',
            'nom' => 'Niakaté',
            'note' => 100
        ),
    );

    echo '<p>Le premier étudiant de ma liste est ' . $classe[0]['note'] . ' mais il a la pire note de la classe</p>';

    //Exercice 6
    echo '<p style="color: red">Exercice 6</p>';
    $classe[2]['note'] = 50;
    echo '<p>' . $classe[1]['note']= 50 . '</p>';
    echo '<p>Mon tableau contient ' . print_r($classe) . '</p>';

    //Exerice 7
    echo '<p style="color: red">Exercice 7</p>';
    $mois = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    for($i = 0; $i< count($mois); $i++){
        echo '<p>' .$mois[$i] . '</p>';
    }

    //Exercice 8
    echo '<p style="color: red">Exercice 8</p>';
    $animaux = array(
        "À la radio, il y'a un poussin, Et le poussin" => "piou, et le poussin piou, et le poussin piou",
        "À la radio, il y'a une poule, La poule" => "cot cot. Et le poussin piou, et le poussin piou, et le poussin piou",
        "À la radio, il y'a un coq Et le coq" => "cocorico Et la poule cot cot Et le poussin piou, et le poussin piou, et le poussin piou"
    );
    foreach($animaux as $indice => $lePoussinPiou){
        echo "<p>" . $indice . ' ' . $lePoussinPiou ."</p>";
    }

    //Exercice 9
    echo '<p style="color: red">Exercice 9</p>';
    $aleatoire = [10, 1541, 56, 8479, 848, 4, 7, 63];

    if(in_array(55, $aleatoire)){
        echo "<p>Tu m'as trouvé</p>";
    }else{
        echo "<p>Une prochaine fois</p>";
    }

    //Exercice 10
    echo '<p style="color: red">Exercice 10</p>';
    $prenom = ['Fatima', 'Sarah', 'Allaan', 'Abdel-karim'];
    $nom = ['Salah', 'Gobrial', 'Salim', 'Ahabad'];

    $nomComplet = array_map(Null, $nom, $prenom);
    print_r($nomComplet);

    echo '</main>';
?>
<?php
    require 'partials/footer.php';
?>