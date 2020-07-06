<?php 

/**
 * Securisation d'une chaine de caractere
 * @param [type] $string
 * @return string
 */

function str_secur($string){

    return trim(htmlspecialchars($string));
}

/**
 * formated debug
 *
 * @param [type] $var
 * @return void
 */
function debug($var){

    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}


/**
 *  function formattage de la date
 *
 * @param  $date
 * @return date 
 */
function formatDate($date)
{
    $date = date("F j, Y, g:i a", strtotime($date));
    return $date;
}