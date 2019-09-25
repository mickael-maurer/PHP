<?php
    $var1 = 6;
    $var2 = 1.3;
    $var3 = 'Variable 3';
    $jour_1 = date('l F d, Y');
    $jour_2 = date('d/m/Y', strtotime('2001-03-12'));
    $jour_3 = date('d/m/Y', date('2001-03-12'));

    echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
    echo 'C\'incroyable <br/>';

    echo "$var1 + $var2 = ";
    echo $var1 + $var2;
    echo '<br/>';
    echo date('l F d, Y');
    echo '<br/>';
    echo $jour_1;
    echo '<br/>';
    echo $jour_2;
    echo '<br/>';
    echo $jour_3;
?>