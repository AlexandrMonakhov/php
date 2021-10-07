<?php
    # Задание №1
    $year = readline('Введите год:');
    if ($year >= 0 && $year <= 2021) {
        if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
            echo "Год високосный\n";
        } else {
            echo "Год невисокосный\n";
        }
    } else {
        echo "Введите год в диапазоне от 0 до 2021\n";
    }
    
    # Задание №2
    $a = readline('Введите длину стороны A:');
    $b = readline('Введите длину стороны B:');
    $alpha_angle = readline('Введите угол альфа (от 1 до 90 градусов):');

    if ($alpha_angle >= 1 && $alpha_angle <= 90) {
        if ($a > 0 && $b > 0) {
            if ($alpha_angle == 90) {
                if ($a == $b) {
                    echo "Фигура - квадрат\n";
                } else {
                    echo "Фигура - прямоугольник\n";
                }
                $s = $a * $b;
            } else {
                if ($a == $b) {
                    echo "Фигура - ромб\n";
                } else {
                    echo "Фигура - параллелограмм\n";
                }
                $s = $a * $b * sin($alpha_angle);
            }
            echo "Площадь: {$s}\n";
        } else {
            echo "A и B должны быть больше 0\n";
        }
    } else {
        echo "Введите угол от 0 до 90 градусов\n";
    }
?>
