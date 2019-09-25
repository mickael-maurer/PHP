<?php
    include 'utils.inc.php';

    start_page('oui');
    //Correspondàl’adresseIPdeceluiquivisualiselapage.
    echo getenv('REMOTE_ADDR'), '<br/>';
    //Correspondàl’adresseIPduserveur<.
    echo getenv('HTTP_HOST'), '<br/>';
    //logicielserveurWebutilisé.
    echo getenv('SERVER_SOFTWARE'), '<br/>';
    phpinfo();
?>

<form>
    <input type="text"/>
    <input type="radio"/>
    <input type="text"/>
    <input type="password"/>
    <input type="password"/>
    <input type="text"/>
    <select>
        <option value="France" >France</option>
        <option value="Pakistan" >Pakistan</option>
    </select>
    <input type="checkbox"/>
    <input type="submit"/>
</form>

<?php
    end_page();
?>