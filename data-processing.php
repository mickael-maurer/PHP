<?php
$identifiant = $_POST['identifiant'];
$sexe = $_POST['sexe'];
$email = $_POST['email'];
$password = $_POST['mdp'];
$telephone = $_POST['telephone'];
$pays = $_POST['nom_pays'];
$action = $_POST['action'];

if($action == 'mailer')
{
    $message = 'Voici vos identifiants d\'inscription :' .PHP_EOL .$identifiant;
    $message .= 'E-mail : '.$email . PHP_EOL;
    $message .= 'Mot de passe : '. PHP_EOL . $password;
    $message .= 'Sexe : '. PHP_EOL . $sexe;
    $message .= 'Téléphone : '. PHP_EOL . $telephone;
    $message .= 'Pays : '. PHP_EOL . $pays;
    mail($email, 'test', $message);
    echo '<br/><strong>envoyé</strong><br/>';

    $query = 'INSERT INTO user (date, email) VALUES (\'' . $today . '\', \'' . $email . '\')';

    }
else
    {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
    }
?>