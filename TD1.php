<?php
    function start_page($title)
    {
        echo ' <!DOCTYPE html> <html
    lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
        ;
    };

    start_page('First PHP');

    echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
    echo 'C\'est pas mal non ? <br/>';
    $var1 = 6;
    $var2 = 1.3;
    $var3 = 'Variable 3';
    echo "$var1 + $var2 = ";
    echo $var1 + $var2;
    echo '<br/>';
    echo 'oui';
?>