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

        $pfad='loader/Objekte'.DIRECTORY_SEPARATOR.$klassenname.'.php'; // Wo kann die Klasse liegen?

        if (file_exists($pfad))
        {
            echo "<pre>";
            print_r($pfad);
            echo "</pre>";
            require_once $pfad;
        }
        else
        {
            $pfad='loader'.DIRECTORY_SEPARATOR.$klassenname.'.php';     // Wo kann die Klasse liegen?

            if (file_exists($pfad))
            {
                echo "<pre>";
                print_r($pfad);
                echo "</pre>";
                require_once $pfad;
            }
            else
            {
                return false;
            }
        }
    }
}