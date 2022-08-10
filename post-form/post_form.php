<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="post_form.php" method="post">
    <label for="number">Num</label>
    <input type="number" name="number" id="number">
    <button type="submit" name="submit">Submit</button>
</form>
<br>
<?php

$num = $_POST["number"];

function formCount($num) {
    if($num == null) {
        echo "Bir değer giriniz!";
    } elseif ($num % 3 == 0) {
        $a = $num / 3;
        echo $num . " sayısı 3 sayısına tam bölünebilir. Sonuç: " . $a . " sayısıdr.";
    } else {
        echo $num . " sayısı 3 e tam bölünmez, ";
        $b = $num;
        while ($b % 3 == 0) {
            $b ++;
        }
        echo $b . " sayısı 3 sayısına tam bölünebilir.";
    }

}

formCount($num);


?>


</body>
</html>
