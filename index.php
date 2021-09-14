<?php
    # Задание №1
    $a = 3;
    $b = 7;
    $h = 4;

    $s = (($a + $b) / 2) * $h;

    echo "<p>Площадь трапеции со сторонами <b>a = {$a}</b> и <b>b = {$b}</b> равна <b>{$s}</b></p>";
    
    # Задание №2
    $number = str_split(541967);

    $sum = 0;
    $multiply = 1;

    for ($i = 0; $i < count($number); $i += 2) {
        $temp = strval($number[$i]) . strval($number[$i + 1]);
        $sum += (int)$temp;
    }
    echo "Сложение: " . $sum . "<br />";

    for ($i = 0; $i < count($number); $i += 3) {
            $temp = strval($number[$i]) . strval($number[$i + 1]) . strval($number[$i + 2]);
            $multiply *= (int)$temp;
        }
    echo "Умножение: " . $multiply . "<br /> <br /> <br />";

    # Задание №3
    $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel tempus erat. In sollicitudin nisl nisi, in cursus erat pulvinar et. In congue eleifend accumsan. Nam dictum nibh a justo iaculis, at hendrerit dui condimentum. Nulla et malesuada elit. Etiam eu dolor et nulla lobortis lacinia malesuada quis lacus. Aliquam nec nibh porta, vehicula justo id, sodales eros. Nulla facilisi. Nulla quis dui volutpat, mattis dolor massa ut, interdum nisl.';

    $taggedText = "<li>" . str_replace('.', ';</li><li>', $text) . "</li>";

    echo "<ol>";
    echo preg_replace('~(<(.*)[^<>]*>\s*<\/\\2>)~i', '', $taggedText);
    echo "</ol>";

?>