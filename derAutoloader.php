<?php
/**
 * Created by PhpStorm.
 * Date: 29.01.2015
 */

class derAutoloader
{
    public static function load($klassenname)
    {
        echo $klassenname."<br />";
        // Verbeiten bestimmter Zeichen in Klassennamen
        if (strpos ($klassenname, '.') !== false || strpos ($klassenname, '/') !== false
            || strpos ($klassenname, ':') !== false)
        {
            return false;
        }

        $pfad=__DIR__ .DIRECTORY_SEPARATOR.$klassenname.'.php'; // Wo kann die Klasse liegen?

//        echo "<pre>";
//        print_r($pfad);
//        echo "</pre>";

        if (file_exists($pfad))
        {
            echo "Gefunden und beim Einbinden.";
            require_once $pfad;
        }
        else
        {
            echo "File nicht gefunden...";
            return false;
        }
        return true;
    }
}