<?php
    $var1 = 6;
    $var2 = 1.3;
    $var3 = 'Variable 3';
    $jour = date('l F d, Y');
    $jour_fr = date('d/m/Y', strtotime('2001-12-03'));

    echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
    echo 'C\'est pas mal non ? <br/>';

    echo "$var1 + $var2 = ";
    echo $var1 + $var2;
    echo '<br/>';
    echo date('l F d, Y');
    echo '<br/>';
    echo $jour_fr;
    echo '<br/>';
    echo $jour_fr;
?>