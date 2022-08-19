<?php

class Sheep_farm {
    public $sheepAge = array("young", "old");
    public $sheepColor = array("black", "white");
    public static $counterBlack = 1;
    public static $counterWhite = 1;

    public function __construct() {
        $age = array_rand($this->sheepAge);
        $color = array_rand($this->sheepColor);


        if ($age == $this->sheepAge[0]) {
            echo 'This sheep is not ready to be sheared.' . "<br>";
        } else {
            if ($color == $this->sheepColor[0]) {
                echo "Black wool total: " . self::$counterBlack . "<br>";
                self::$counterBlack++;
            } else {
                echo "White wool total: " . self::$counterWhite . "<br>";
                self::$counterWhite++;
            }
        }

    }

}

for ($i = 0; $i < 20; $i++) {
    $sheep = new Sheep_farm();
}