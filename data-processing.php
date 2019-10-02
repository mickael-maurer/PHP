<?php
$identifiant = $_POST['identifiant'];
$sexe = $_POST['sexe'];
$email = $_POST['email'];
$password = $_POST['mdp'];
$telephone = $_POST['telephone'];
$pays = $_POST['nom_pays'];
$action = $_POST['action'];
$today = date('Y-m-d');

$dbLink = mysqli_connect('mysql-mickaelmaurer.alwaysdata.net','174459','J8Epd537v9za@@')
or die('Erreur de connexion au serveur:'.mysqli_connect_error());

mysqli_select_db($dbLink,'mickaelmaurer_sql')
or die('Erreur dans la sélection de la base:'.mysqli_error($dbLink));

$query = 'SELECT id, email, date FROM user';

if($action == 'mailer')
{
    $message = 'Voici vos identifiants d\'inscription :' .PHP_EOL .$identifiant;
    $message .= 'E-mail : '.$email . PHP_EOL;
    $message .= 'Mot de passe : '. PHP_EOL . $password;
    $message .= 'Sexe : '. PHP_EOL . $sexe;
    $message .= 'Téléphone : '. PHP_EOL . $telephone;
    $message .= 'Pays : '. PHP_EOL . $pays;
    var_dump($email);
    mail($email, 'test', $message);
    echo '<br/><strong>envoyé</strong><br/>';

    $query = 'INSERT INTO user (date, email) VALUES (\'' . $today . '\', \'' . $email . '\')';

    }
else
    {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
    }
?>