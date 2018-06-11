<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 04/02/2018
 * Time: 19:54
 */
function autoloader($class){
    include 'classes/'.$class.'.php';
}

spl_autoload_register('autoloader');

?>