<?php
/**
 * Created by PhpStorm.
 * Date: 29.01.2015
 */

class derAutoloader
{
    public static function load($klassenname)
    {
        // Verbeiten bestimmter Zeichen in Klassennamen
        if (strpos ($klassenname, '.') !== false || strpos ($klassenname, '/') !== false
            || strpos ($klassenname, '\\') !== false || strpos ($klassenname, ':') !== false)
        {
            return;
        }

        $pfad='loader\Objekte'.DIRECTORY_SEPARATOR.$klassenname.'.php';

        echo "<pre>";
        print_r($pfad);
        echo "</pre>";

        if (file_exists($pfad)) { require_once $pfad; }
        else { return false; }
    }
}