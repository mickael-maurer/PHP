<?php
    include'utils.inc.php';
    //Correspondàl’adresseIPdeceluiquivisualiselapage.
    echo getenv('REMOTE_ADDR');
    //Correspondàl’adresseIPduserveur.
    echo getenv('HTTP_HOST');//Correspondau
    //logicielserveurWebutilisé.
    echo getenv('SERVER_SOFTWARE');
    phpinfo();
?>