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

</form>

<?php
    end_page();
?>