<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
    lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
};

function end_page($title)
{
    echo ' <!DOCTYPE html> <html
    lang="fr"><footer><title>' . PHP_EOL . $title . '</title></footer><body>' . PHP_EOL;
};

    start_page('Test start');
    end_page('Test end');
?>