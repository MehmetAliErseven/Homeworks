<?php
echo "ucgen(20)";
function ucgen($u) {
    $i = 0;
    while ($i < $u) {
        for ($a = 1; $a < $i; $a++) {
            echo " 0 ";
        }
        echo "<br>";
        $i++;
    }
}

ucgen(20);


?>