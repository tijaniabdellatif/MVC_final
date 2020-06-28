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