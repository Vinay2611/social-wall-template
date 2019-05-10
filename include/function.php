<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 20-10-2018
 * Time: 11:53
 */

/*random 10 digit number*/
function rand_str($length, $charset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789') {
    $result = '';
    $count = strlen($charset);
    for ($i = 0; $i < $length; $i++) {
        $result .= $charset[mt_rand(0, $count - 1)];
    }
    return $result;
}

//string truncate
function truncate($string,$length)
{
    $string = strip_tags($string);
    if (strlen($string) > $length)
    {
        // truncate string
        $stringCut = substr($string, 0, $length);
        // make sure it ends in a word
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
    }
    return $string;
}