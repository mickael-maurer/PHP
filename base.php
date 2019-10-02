<?php
    $dbLink = mysqli_connect('mysql-mickaelmaurer.alwaysdata.net','174459','J8Epd537v9za@@')
    or die('Erreur de connexion au serveur:'.mysqli_connect_error());

    mysqli_select_db($dbLink,'mickaelmaurer_sql')
    or die('Erreur dans la sélection de la base:'.mysqli_error($dbLink));

    $query = 'SELECT id, email, date FROM user';

    if(!($dbResult = mysqli_query($dbLink, $query)))
    {
        echo 'Erreurderequête<br/>';
        // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }
?>