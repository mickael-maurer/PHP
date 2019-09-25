<?php
$action = 0;
if($action == 'mailer') {
        $message = 'Voici vos identifiants d\'inscription :' .PHP_EOL;
        $message .= 'Email : '.$email . PHP_EOL;
        $message .= 'Motdepasse : '. PHP_EOL . $password;
    }
    else {
       echo '<br/><strong>Bouton non géré !</strong><br/>';
    }
?>