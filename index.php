<?php

include'Objekte/Baum.php';

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


$eiche = new Baum('Eiche',50,1);
$fichte = new Baum('Fichte',100,5);
echo "<div class='text'>"."Ich bin eine kleine ".$eiche->Art_ausgabe()." </div>";
echo "<div class='text'>".$eiche->wachsen(2)."</div>";
echo "<div class='text'>".$eiche->sage_mir_dein_wohlbefinden()."</div>";
echo "<div class='text'>".$eiche->gewitter()."</div>";
echo "<div class='text'>".$eiche->wachsen(1)."</div>";
echo "<div class='text'>".$eiche->sage_mir_dein_wohlbefinden()."</div>";
echo $eiche->meine_hoehe();
echo "<div class='text'>".$eiche->wachsen(4)."</div>";
echo "<div class='text'>Dabei erhole ich mich vom Gewitter.</div>";
$eiche->schlafen();
echo "<div class='text'>".$eiche->sage_mir_dein_wohlbefinden()."</div>";
echo $eiche->meine_hoehe();

echo "<br /><br /><br />";

echo "<div class='text'>"."Ich bin eine kleine ".$fichte->Art_ausgabe()." </div>";
echo "<div class='text'>".$fichte->wachsen(2)."</div>";
echo "<div class='text'>".$fichte->sage_mir_dein_wohlbefinden()."</div>";
echo "<div class='text'>".$fichte->gewitter()."</div>";
echo "<div class='text'>".$fichte->wachsen(1)."</div>";
echo "<div class='text'>".$fichte->sage_mir_dein_wohlbefinden()."</div>";
echo $fichte->meine_hoehe();
echo "<div class='text'>".$fichte->wachsen(4)."</div>";
echo "<div class='text'>Dabei erhole ich mich vom Gewitter.</div>";
$fichte->schlafen();
echo "<div class='text'>".$fichte->sage_mir_dein_wohlbefinden()."</div>";
echo $fichte->meine_hoehe();

echo "</span>";

echo "</body>";
echo "</html>";

?>