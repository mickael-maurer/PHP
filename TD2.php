<?php
    include 'utils.inc.php';
    //Correspondàl’adresseIPdeceluiquivisualiselapage.
    echo getenv('REMOTE_ADDR'), '<br/>';
    //Correspondàl’adresseIPduserveur<.
    echo getenv('HTTP_HOST')<br/>;
    //logicielserveurWebutilisé.
    echo getenv('SERVER_SOFTWARE')<br/>;
    phpinfo();
?>