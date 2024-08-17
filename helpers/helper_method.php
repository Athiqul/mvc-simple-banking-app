<?php 

//For display data and die 
function dd($data):void
{
    echo '<pre>';
    die(print_r($data, true));
    echo '</pre>';
}

?>