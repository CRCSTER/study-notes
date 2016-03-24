<?php
/**
 * Created by PhpStorm.
 * User: caoruncheng
 * Date: 16/3/15
 * Time: 下午9:41
 */


function autoload($classname)
{

    $classname = ltrim($classname, '\\');
    $class = '';
    if ($pos = strrpos($classname, '\\')) {
        $name = substr($classname, 0, $pos);
        $class = substr($classname, $pos + 1);
        $lastname = str_replace('\\', DIRECTORY_SEPARATOR, $name) . DIRECTORY_SEPARATOR;
    }

    $lastname .= str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';

    require_once $lastname;

}
spl_autoload_register('autoload');
