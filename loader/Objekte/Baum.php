<?php
/**
 * Created by PhpStorm.
 * Date: 28.01.2015
 */

namespace loader\Objekte;


class Baum
{
    private $art = "Eiche";
    protected $gesundheit = 100; // bei 0 ist unser Baum ein Tisch
    protected $hoehe;           // die Höhe des Baumes

    public function __construct($baum, $ges, $hoch)
    {
        $this->art = $baum;
        $this->gesundheit = $ges;
        $this->hoehe = $hoch;
    }

    public function sage_mir_dein_wohlbefinden()
    {
        if ($this->gesundheit < 0){$this->gesundheit = 0;}
        elseif($this->gesundheit >100){$this->gesundheit = 100;}

        if ( $this->gesundheit > 80) return 'Mir geht es super. ';
        if ( $this->gesundheit > 40) return 'Ich hatte schon bessere Tage. ';
        if ( $this->gesundheit > 0) return 'Mir geht es echt mies. ';
        return 'Ich bin ein Tisch.';
    }

    public function meine_hoehe()
    {
        return 'Ich bin '.$this->hoehe.'m Hoch';
    }

    public function wachsen($wert)
    {
        echo '<div class="text">Ich wachse um '.$wert.'m in die höhe.</div>';
        $this->hoehe = $this->hoehe + $wert;
    }

    public function gewitter()
    {
        echo '<div class="text">Ein furchtbares gewitter zeiht durchs land...</div>';
        $this->gesundheit = $this->gesundheit - 21;
    }

    public function schlafen()
    {
        return $this->gesundheit = 100;
    }

    public function Art_ausgabe()
    {
        return $this->art;
    }

    public function gesundheitZahl()
    {
        return $this->gesundheit;
    }
    
}
?>