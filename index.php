<?php
// require 'Foo.php';
// $foo = new Acme\Tools\Foo(); //Alte und lange schreibweise
/*use Acme\Tools\Foo as SomeFooClass; // aliasnahme für den Namespace
$foo = new SomeFooClass();  // ...*/
use \loader\Objekte;



//include'Objekte/Baum.php'; // direktes einbinden

require 'loader/derAutoloader.php';  // Einbinden über php file
spl_autoload_register(array('derAutoloader','load'));

/*function __autoload($klassenname)        // Funktioniert gut!
{
    // Verbieten bestimmter Zeichen in Klassennamen
    if (strpos ($klassenname, '.') !== false || strpos ($klassenname, '/') !== false
        || strpos ($klassenname, '\\') !== false || strpos ($klassenname, ':') !== false)
    {
        return;
    }

    $pfad ='loader/Objekte/'.$klassenname.'.php';

    if (file_exists($pfad))
    {
        require $pfad;
    } else
    {
        return false;
    }
}*/

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head lang='de'>";
echo "    <meta charset='UTF-8'>";
echo "    <title> I have not Title</title>";
echo "<link rel='stylesheet' type='text/css' href='style.css'>";
echo "</head>";
echo "<body id='bod'>";

echo "<div id='header'>";
    echo "<h2 id='großschrift'>Exercise.</h2>";
    echo "<div>Der Baum aus Klassen</div>";
echo "</div>";

$foo = new Foo();
$eiche = new Baum('Eiche',500,1);
$fichte = new Baum('Fichte',100,5);
echo "<div class='text'>"."Ich bin eine kleine ".$eiche->Art_ausgabe()." </div>";
echo "<div class='text'>".$eiche->meine_hoehe()." </div>";
echo "<div class='text'>".$eiche->wachsen(2)."</div>";
echo "<div class='text'>".$eiche->sage_mir_dein_wohlbefinden(),$eiche->gesundheitZahl()."</div>";
echo "<div class='text'>".$eiche->gewitter()."</div>";
echo "<div class='text'>".$eiche->sage_mir_dein_wohlbefinden(),$eiche->gesundheitZahl()."</div>";
echo "<div class='text'>".$eiche->gewitter()."</div>";
echo "<div class='text'>".$eiche->sage_mir_dein_wohlbefinden(),$eiche->gesundheitZahl()."</div>";
echo "<div class='text'>".$eiche->gewitter()."</div>";
echo "<div class='text'>".$eiche->sage_mir_dein_wohlbefinden(),$eiche->gesundheitZahl()."</div>";
echo "<div class='text'>".$eiche->gewitter()."</div>";
echo "<div class='text'>".$eiche->sage_mir_dein_wohlbefinden(),$eiche->gesundheitZahl()."</div>";
echo "<div class='text'>".$eiche->gewitter()."</div>";
echo "<div class='text'>".$eiche->sage_mir_dein_wohlbefinden(),$eiche->gesundheitZahl()."</div>";
echo "<div class='text'>".$eiche->gewitter()."</div>";
echo "<div class='text'>".$eiche->sage_mir_dein_wohlbefinden(),$eiche->gesundheitZahl()."</div>";
echo "<div class='text'>".$eiche->meine_hoehe()."</div>";
echo "<div class='text'>".$eiche->wachsen(4)."</div>";
echo "<div class='text'>Dabei erhole ich mich vom Gewitter.</div>";
$eiche->schlafen();
echo "<div class='text'>".$eiche->sage_mir_dein_wohlbefinden(),$eiche->gesundheitZahl()."</div>";
echo "<div class='text'>".$eiche->meine_hoehe()."</div>";

echo "<br /><br /><br />";

echo "<div class='text'>"."Ich bin eine kleine ".$fichte->Art_ausgabe()." </div>";
echo "<div class='text'>".$fichte->meine_hoehe()."</div>";
echo "<div class='text'>".$fichte->wachsen(2)."</div>";
echo "<div class='text'>".$fichte->sage_mir_dein_wohlbefinden()."</div>";
echo "<div class='text'>".$fichte->gewitter()."</div>";
echo "<div class='text'>".$fichte->wachsen(1)."</div>";
echo "<div class='text'>".$fichte->sage_mir_dein_wohlbefinden()."</div>";
echo "<div class='text'>".$fichte->meine_hoehe()."</div>";
echo "<div class='text'>".$fichte->wachsen(4)."</div>";
echo "<div class='text'>Dabei erhole ich mich vom Gewitter.</div>";
$fichte->schlafen();
echo "<div class='text'>".$fichte->sage_mir_dein_wohlbefinden()."</div>";
echo "<div class='text'>".$fichte->meine_hoehe()."</div>";

$test = __DIR__;
echo $test."<br/>";

echo "<div class='text'>".$foo->doAwesomeFooThings()."</div>";

echo "</span>";

echo "</body>";
echo "</html>";

?>
