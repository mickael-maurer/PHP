<?php
$identifiant = $_POST['identifiant'];
$sexe = $_POST['sexe'];
$email = $_POST['email'];
$password = $_POST['mdp'];
$telephone = $_POST['telephone'];
$pays = $_POST['nom_pays'];
$action = $_POST['action'];
$today = date('Y-m-d');

$dbLink = mysqli_connect('mysql-mickaelmaurer.alwaysdata.net','174459','motdepassesql')
or die('Erreur de connexion au serveur:'.mysqli_connect_error());

mysqli_select_db($dbLink,'mickaelmaurer_sql')
or die('Erreur dans la sélection de la base:'.mysqli_error($dbLink));


$query  = 'INSERT INTO user(sexe, email, password, telephone, pays, date)VALUES(';
$query .= '"'.$sexe . '",';
$query .= '"'.$email . '",';
$query .= '"'.$password . '",';
$query .= '"'.$telephone . '",';
$query .= '"'.$pays . '",';
$query .= '"'.$today . '")';

if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreurderequête<br/>';
    // Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    // Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}


if($action == 'mailer')
    {
        $message = 'Voici vos identifiants d\'inscription :' .PHP_EOL .$identifiant;
        $message .= 'E-mail : '.$email . PHP_EOL;
        $message .= 'Mot de passe : '. PHP_EOL . $password;
        $message .= 'Sexe : '. PHP_EOL . $sexe;
        $message .= 'Téléphone : '. PHP_EOL . $telephone;
        $message .= 'Pays : '. PHP_EOL . $pays;
        //mail($email, 'test', $message);
        echo '<br/><strong>envoyé</strong><br/>';

    }
else
    {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }
?>