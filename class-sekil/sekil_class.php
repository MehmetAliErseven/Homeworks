<?php
class Sekil {
    public $a = 4;
    public $b = 6;
    public $taban = 5;
    public $h = 8;
}

class Dikdortgen extends Sekil {
    public function alan () {
        return $this->a * $this->b;
    }
    public function cevre () {
        return ($this->a * 2) + ($this->b * 2);
    }
}

class Ucgen extends Sekil {
    public function alan () {
        return ($this->taban * $this->h) / 2;
    }
    public function cevre () {
        return $this->a + $this->b + $this->taban;
    }
}

class Kare extends Sekil {
    public function alan () {
        return $this->a * $this->a;
    }
    public function cevre () {
        return $this->a * 4;
    }
}

$Sekil = new Ucgen();
echo $Sekil->alan();