<?php
    include 'utils.inc.php';
?>

<form action="data-processing.php" method="post">
    <input type="text" name="identifiant"/>Identifiant<br/>
    <input type="radio" name="sexe" value="femme"/>Femme<br/>
    <input type="radio" name="sexe" value="homme"/>Homme<br/>
    <input type="text" name="email"/>E-mail<br/>
    <input type="password" name="mdp"/>Mot de passe<br/>
    <input type="password"name="mdp"/>Vérification de mot de passe<br/>
    <input type="text" name="telephone"/>Téléphone<br/>
    <select name="nom_pays">
        <option value="France" >France</option><br/>
        <option value="Belgique" >Belgique</option><br/>
        <option value="Italie" >Italie</option><br/>
        <option value="Espagne" >Espagne</option><br/>
    </select><br/>
    <input type="checkbox" name="condition"/>Condition d'utilisation<br/>
    <input type="submit" name="action" value="mailer"/>Envoyer<br/>
</form>

<?php
    end_page();
?>